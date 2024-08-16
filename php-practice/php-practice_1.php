    <?php
    // Q1 変数と文字列。
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

    if ($device == 'windows' || $device == 'mac') {
        echo '使用OSは' . $device . 'です。';
    } else {
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
    $prefacture = ['東京','横浜','群馬','埼玉','千葉'];
    echo $prefacture[2]. 'と' . $prefacture[3] . 'は関東地方の都道府県です。';


    // Q7 連想配列-1
    $kantou = ['東京途'=>'新宿区',
               '横浜県'=>'横浜市',
               '千葉県'=>'千葉市',
               '埼玉県'=>'さいたま市',
               '栃木県'=>'宇都宮市',
               '群馬県'=>'前橋市',
               '茨城県'=>'水戸市'
            ];
    foreach ($kantou as $prefacture){
        echo $prefacture."\n";
    }


    // Q8 連想配列-2
    $kantou = ['東京途'=>'新宿区',
               '横浜県'=>'横浜市',
               '千葉県'=>'千葉市',
               '埼玉県'=>'さいたま市',
               '栃木県'=>'宇都宮市',
               '群馬県'=>'前橋市',
               '茨城県'=>'水戸市'
            ];
    foreach ($kantou as $prefacture => $kentyoushozaiti){
        if ($prefacture == '埼玉県'){
            echo $prefacture . 'の県庁所在地は、' . $kentyoushozaiti .'です。';
        }
    }


    // Q9 連想配列-3
    $kantou = ['東京途'=>'新宿区',
               '横浜県'=>'横浜市',
               '千葉県'=>'千葉市',
               '埼玉県'=>'さいたま市',
               '栃木県'=>'宇都宮市',
               '群馬県'=>'前橋市',
               '茨城県'=>'水戸市',
               '北海道'=>'札幌市',
               '岩手県'=>'盛岡市'
            ];
    $kantou_ken = ['東京途', 
                   '横浜県',
                   '千葉県',
                   '埼玉県',
                   '栃木県',
                   '群馬県',
                   '茨城県'
                ];

    foreach ($kantou as $prefecture => $kentyoushozaiti) {
        if (in_array($prefecture, $kantou_ken)) {
            echo $prefecture . 'の県庁所在地は、' . $kentyoushozaiti . 'です。' . "\n";
        } else {
            echo $prefecture . 'は関東地方ではありません。' . "\n";
        }
    }

    // Q10 関数-1
    function hello ($helloName){
        return $helloName;
        }
    
    echo hello('松浦先生') . '、こんにちは'. "\n";
    echo hello('唐澤貴洋') . '、こんにちは';


    // Q11 関数-2
    function calcTaxInPrice ($price){
        return $price * 1.1;
    }
    $taxInPrice = calcTaxInPrice(1000);
    echo '1000円の商品の税込み価格は' . $taxInPrice . '円です。';


    // Q12 関数とif文
    function distinguishNum ($randamNum){
        if ($randamNum % 2 == 0){
            return $randamNum . 'は偶数です。';
        }else{
            return $randamNum . 'は奇数です。';
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
                return '合格です。'."\n";
            
            case 'C':
                return '合格ですが追加課題があります。'."\n";
                
            case 'D':
                return '不合格です。'."\n";
                
            default:
                return '判定不明です。講師に問い合わせてください。'."\n";
        }
    }

    echo evaluateGrade('C');
    echo evaluateGrade('Z');


    ?>