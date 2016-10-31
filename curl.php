<?php

// ПОЛУЧАЕМ ПЕРВЫЕ КУКИ (ДЛЯ ЧТЕНИЯ КАПЧИ)

$url='http://4pda.ru/forum/index.php?act=login&CODE=00&return=http%3A%2F%2F4pda.ru%2Fforum%2Findex.php%3Fact%3Didx';
$ch = curl_init($url);

//curl_setopt($ch, CURLOPT_URL, 'http://4pda.ru/forum/index.php?act=login');
 curl_setopt($ch, CURLOPT_HEADER, false);

 curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (бла бла бла..) ");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

//curl_setopt($ch, CURLOPT_POST, 1);


//curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot (http://blog.yousoft.ru)');
//curl_setopt($ch, CURLOPT_CODE, '00');
//curl_setopt($ch, CURLOPT_return, '');

//curl_setopt($ch,CURLOPT_POSTFIELDS,"CODE=00&return=http%3A%2F%2F4pda.ru%2Fforum%2Findex.php%3Fact%3Didx");


  curl_setopt($ch, CURLOPT_COOKIEJAR, "./my_cookies.txt");
  curl_setopt($ch, CURLOPT_COOKIEFILE, './my_cookies.txt');

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);


$content = curl_exec( $ch );
echo $content;
  $err     = curl_errno( $ch );
  $errmsg  = curl_error( $ch );
  $header  = curl_getinfo( $ch );
  curl_close( $ch );

  $header['errno']   = $err;
  $header['errmsg']  = $errmsg;
  $header['content'] = $content;

$result=$header;

  if ($result['errno'] != 0 )
      {
  	echo $result['errmsg'];
  	}
  else
  	{
  	$page = $result['content'];
  	echo $page;
  	}













 ?>
