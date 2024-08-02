<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari formulir
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Konfigurasi pengaturan email
  $to = "recipient@example.com"; // ganti dengan alamat email tujuan
  $subject = "New message from " . $fullname;
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Kirim email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>
