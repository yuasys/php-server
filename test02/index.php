<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPのテスト2</title>
</head>
<body>
  <h1>test02フォルダにあるPHPのテスト2</h1>
  <?php
$api = 'https://koyomi.zingsystem.com/api/';
$param = array(
  'mode' => "d"
 ,'cnt'  => "1"
 ,'targetyyyy' => date("Y")
 ,'targetmm' => date("m")
 ,'targetdd' => date("d")
);

$ch = curl_init($api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));

$result = curl_exec($ch);
curl_close($ch);

$data = json_decode($result, true);
$date = $data['datelist'][date("Y-m-d")];

# 今日の曜日
$yostr='日月火水木金土';
$yo = mb_substr($yostr,date("w"),1);

# 挨拶文を自動出力
echo '🐯 おはようございます！ '.date("Y").'年'.date("n").'月'.date("j").'日（'.$yo.'） '.$date['rokuyou'].' 🐯';

?>
</body>
</html>