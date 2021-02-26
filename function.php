<!-- 関数...よく使う処理をまとめたもの -->
<!-- 関数2種類 -->
<!-- 1.組み込み関数（ex.array() ) -->
<!-- 2.自作関数 -->

<?php

    // 引数（1つでも複数でもOK）
    // 第一引数：$num1
    // 第二引数：$num2
    // 合計値を出す関数(plus)

    function plus($num1, $num2){
        return $num1 + $num2 ;
    }

    echo plus(10,20) . '<br>';

    // 戻り値（呼び出し元に処理した結果を返す）

    // greetingという名前の関数
    // 第一引数に $name
    // こんにちは ○○ さん」という表示をさせる
    
    function greeting($name){
        echo '「こんにちは' . $name . 'さん」';
    }

    // 呼び出し元
    greeting('村田');

    // 80点以上は合格、未満は不合格と返す関数
    function checkExam($test){
        if($test >= 80){
            return '合格';
        }else{
            return '不合格';
        }
    }
    // 呼び出し元
    echo checkExam(70);

    // 100円のみかんを3つと
    // 500円のぶどうを1つ購入して
    // 消費税10％がついた合算値

    // 呼び出し元
    // echoで「合計金額は 〇〇 円です」

    function payment($n1, $n2){
        return (100 * $n1 + 500 * $n2) * 1.1;
    }

    echo '「合計金額は' . payment(5, 6) . '円です」';

    function mutch($num1, $num2){
        if($num1 >= $num2){
            return $num1;
        }else{
            return $num2;
        }
    }

    $result = mutch(3, 9);
    echo $result;
    echo '<br>';

    // Aさんの所持金
    
    // 金額
    function sum($mikan, $budo, $suika){
        $summikan = 100 * $mikan;
        $sumbudo = 300 * $budo;
        $sumsuika = 800 * $suika;
        return $sumbudo + $summikan + $sumsuika;
    }

    $sumallA = sum(3, 2, 1);
    $sumallB = sum(5, 3, 2);

    // おつり
    function syojikin($wollet, $buy){
        return $wollet - $buy;
    }

    echo syojikin(3000, $sumallA);
    echo syojikin(5000, $sumallB);
    