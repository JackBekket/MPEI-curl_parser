<?php
  $ch = curl_init();
  // GET запрос указывается в строке URL
  curl_setopt($ch, CURLOPT_URL, 'http://4pda.ru/forum/index.php?act=login&CODE=00&return=http%3A%2F%2F4pda.ru%2Fforum%2Findex.php%3Fact%3Didx');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot (http://mysite.ru)');
  $data = curl_exec($ch);
echo $data;

curl_setopt($ch, CURLOPT_COOKIEJAR, "my_cookies.txt"); 

  curl_close($ch);


?>
