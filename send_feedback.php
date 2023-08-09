<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];

  // Отправка данных на почтовый адрес
  $to = 'Dessert.agency@mail.ru';
  $subject = 'Новая заявка с формы';
  $message = "Имя: $name\nКомпания: $company\nТелефон: $phone";
  $headers = "From: Dessert.agency@mail.ru";

  mail($to, $subject, $message, $headers);

  // Перенаправление на страницу "Спасибо" или другую страницу
  header('Location: thanks.html');
  exit;
}
?>
