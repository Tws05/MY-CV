<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validasi email dan pesan
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format email tidak valid");
    }
    if (empty($message)) {
        die("Pesan diperlukan");
    }
    
    // Mengirim email
    $to = "mabduljalil42@gmail.com";
    $subject = "Pengiriman Formulir Kontak";
    $headers = "From: " . $email;
    $body = "Pesan: " . $message;
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Email berhasil dikirim.";
    } else {
        echo "Gagal mengirim email.";
    }
} else {
    http_response_code(405);
    echo "Metode Tidak Diizinkan";
}
?>
