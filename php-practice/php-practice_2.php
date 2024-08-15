<?php
// Q1 tic-tac問題
for($i = 1;$i <= 100; $i++){
  if($i % 4 == 0 && $i % 5 ==0 ){
      echo 'tic-tac'."\n";
  }else if ($i % 5 == 0){
      echo 'tac'."\n";
  }else if ($i % 4 == 0){
      echo 'tic'."\n";
  }else {
      echo $i."\n";
  }
}


// Q2 多次元連想配列
echo $personalInfos[1]["name"] . 'の電話番号は' . $personalInfos[1]["tel"] . 'です。';

foreach ($personalInfos as $x => $value){
  echo $x+1 . '番目の' . $value["name"] . 'の' . 'メールアドレスは' . $value["mail"] . 'で' . '電話番号は' . $value["tel"] . 'です。'."\n";
}

$ageList = [25, 30, 18];

$personalInfos[0]["age"] = $ageList[0];
$personalInfos[1]["age"] = $ageList[1];
$personalInfos[2]["age"] = $ageList[2];

var_dump($personalInfos)



// Q3 オブジェクト-1
$bob = new Student("15","bob");
echo '学籍番号' . $bob -> studentId . '番の生徒は' . $bob -> studentName . 'です。';


// Q4 オブジェクト-2
public function attend($language)
{
    echo $this->studentName . 'は' . $language . 'の授業に参加しました。学籍番号：' . $this->studentId;
}


// Q5 定義済みクラス
$date = new DateTime('2024-08-12');
echo $date->modify('-1 months')->format('Y-m-d');


$date1 = new DateTime('2024-08-12');
$date2 = new DateTime('1992-04-25');
$diff = $date2->diff($date1);
echo 'あの日から' . $diff->format('%a') . '日経過しました。';
?>