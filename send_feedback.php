<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Получение данных из формы
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $query = $_POST['query'];

  // Проверка валидности email и телефона
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Неправильный формат email.";
    exit();
  }

  if (!preg_match("/^\+7\d{10}$/", $phone)) {
    echo "Неправильный формат телефона.";
    exit();
  }

  // Адрес электронной почты для отправки данных
  $to = "your-email@example.com";

  // Заголовок письма
  $subject = "Форма обратной связи";

  // Тело письма
  $message = "Имя: $name\n";
  $message .= "Email: $email\n";
  $message .= "Телефон: $phone\n";
  $message .= "Запрос: $query\n";

  // Дополнительные заголовки
  $headers = "From: $email" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";

  // Отправка письма
  if (mail($to, $subject, $message, $headers)) {
    echo "Спасибо! Ваше сообщение было успешно отправлено.";
  } else {
    echo "Произошла ошибка при отправке сообщения.";
  }
}
?>
