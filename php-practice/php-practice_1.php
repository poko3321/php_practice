<?php
// Q1 変数と文字列
$myname = '徳満';
echo '私の名前は「' . $myname .'」です。';


// Q2 四則演算
$num = 5 * 4;
$newnum = $num / 2;

echo $num . "\n",$newnum;


// Q3 日付操作
$nowtime = date("Y/m/d H:i:s");
echo '現在時刻は、' . $nowtime .'です。';


// Q4 条件分岐-1 if文
$device = 'HM66が欲しい！';

if($device == 'windows'){
    echo '使用OSは' . $device .'です。';
}
if($device == 'mac') {
    echo '使用OSは' . $devide .'です。';
}
else {
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 21;
if($age < 18){
    echo '未成年です。';
}else{
    echo '成人です。';
}


// Q6 配列
$prefacture = ['tokyo','yokohama','gunma','saitama','tiba'];
echo $prefacture[2]. 'と' . $prefacture[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$kantou = ['東京途'=>'新宿区','横浜県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];
foreach ($kantou as $yokohama){
    echo $yokohama."\n";
}


// Q8 連想配列-2
$kantou = ['東京途'=>'新宿区','横浜県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];
foreach ($kantou as $yokohama => $popon){
    if ($yokohama == '埼玉県'){
        echo $yokohama . 'の県庁所在地は、' . $popon .'です。';
    }
}


// Q9 連想配列-3
$kantou = ['東京途'=>'新宿区','横浜県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市','北海道'=>'札幌市','岩手県'=>'盛岡市'];
foreach ($kantou as $yokohama => $popon){
    if ($yokohama == '東京途'||$yokohama == '埼玉県'||$yokohama == '横浜県'||$yokohama == '千葉県'||$yokohama == '栃木県'||$yokohama == '群馬県'||$yokohama == '茨城県'){
        echo $yokohama . 'の県庁所在地は、' . $popon .'です。'. "\n";
    }else {
        echo $yokohama . 'は関東地方ではありません。'."\n";
    }
}


// Q10 関数-1
function hello ($helloname){
  echo $helloname . '、こんちゃ';
}

hello('松浦先生');
hello('唐澤貴洋');


// Q11 関数-2
function calcTaxinPrice ($price){
    return $price * 1.1;
}
$taxinPrice = calcTaxinPrice(1000);
echo '1000円の商品の税込み価格は' . $taxinPrice . '円です。';


// Q12 関数とif文
function distinguishNum ($Q12num){
    if ($Q12num % 2 == 0){
        return $Q12num . 'は偶数です。';
    }else{
        return $Q12num . 'は奇数です。';
    }
}

$num15 = distinguishNum(15);
$num14 = distinguishNum(14);

echo $num15."\n";
echo $num14."\n";

// Q13 関数とswitch文
function evaluateGrade ($grade){
    switch ($grade) {
        case 'A':
        case 'B':
            echo '合格です。'."\n";
            break;
        
        case 'C':
            echo '合格ですが追加課題があります。'."\n";
            break;
            
        case 'D':
            echo '不合格です。'."\n";
            break;
            
        default:
            echo '判定不明です。講師に問い合わせてください。'."\n";
            break;
    }
}

evaluateGrade('C');
evaluateGrade('Z');


?>