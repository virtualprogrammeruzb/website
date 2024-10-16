<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $ip = $data['ip'];

    $to = 'bekzodtursunov237@mail.ru'; // O'z elektron pochtangizni yozing
    $subject = 'Foydalanuvchi IP manzili';
    $message = 'Foydalanuvchining IP manzili: ' . $ip;
    $headers = 'From: https://testvirtual.netlify.app/' . "\r\n" .
               'Reply-To: https://testvirtual.netlify.app/' . "\r\n";

    mail($to, $subject, $message, $headers);
}
?>
