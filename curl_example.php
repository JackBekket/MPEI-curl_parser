

<?php

  // Иницализация библиотеки curl
  if ($ch = @curl_init())
  {
    // Устанавливаем URL запроса
    @curl_setopt($ch, CURLOPT_URL, 'http://server.com/');
    // При значении true CURL включает в вывод заголовки
    @curl_setopt($ch, CURLOPT_HEADER, false);
    // Куда помещать результат выполнения запроса:
    //  false - в стандартный поток вывода,
    //  true - в виде возвращаемого значения функции curl_exec.
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Максимальное время ожидания в секундах
    @curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    // Установим значение поля User-agent
    @curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot (http://blog.yousoft.ru)');
    // Выполнение запроса
    $data = @curl_exec($ch);
    // Вывести полученные данные
    echo $data;
    // Особождение ресурса
    @curl_close($ch);
  }
?>
Пример использования GET запроса

<?php
  $ch = curl_init();
  // GET запрос указывается в строке URL
  curl_setopt($ch, CURLOPT_URL, 'http://server.com/?s=CURL');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot (http://mysite.ru)');
  $data = curl_exec($ch);
  curl_close($ch);
?>
Посылка GET запроса ничем не отличается от получения страницы. Важно заметить, что строка запроса формируется следующим образом:

http://server.com/index.php?name1=value1&name2=value2&name3=value3
где http://server.com/index.php - адрес страницы, nameX - название переменной, valueX - значение переменной.

Пример использования POST запроса

<?php
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://server.com/index.php');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  // Нужно явно указать, что будет POST запрос
  curl_setopt($ch, CURLOPT_POST, true);
  // Здесь передаются значения переменных
  curl_setopt($ch, CURLOPT_POSTFIELDS, 's=CURL');
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot (http://mysite.ru)');
  $data = curl_exec($ch);
  curl_close($ch);
?>
Отправка POST запроса не многим отличается от отправки GET запроса. Все основные шаги остаются такие же. Переменные также задаются парами: name1=value1&name2=value2.

Пример HTTP-авторизации

<?php
  // HTTP авторизация
  $url = "http://server.com/protected/";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERPWD, "myusername:mypassword");
  $result = curl_exec($ch);
  curl_close($ch);
  echo $result;
?>
