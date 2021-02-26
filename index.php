<?php
    function hello() {
        echo 'hello!' . '<br>';
    }

    hello();


    function hello2() {
        echo 'こんにちは' . '<br>';
    }

    hello2();

    // ()の中は引数というもの
    function aisatsu($name){
        echo '初めまして、' . $name . 'さん';
    }

    aisatsu('むらた');
    aisatsu('ちひろ');


    // 数字をすべて3倍にする関数
    function i($number){
        echo $number * 3;
    }

    i(5) . '<br>';

    // 3の倍数のときFizz 5の倍数のといBuzz それ以外は見つかりません

    function number($n){
        if($n % 3 == 0){
            echo 'Fizz'. '<br>';
        }elseif($n % 5 == 0){
            echo 'Buzz'. '<br>';
        }else{
            echo 'それ以外は見つかりません'. '<br>';
        }
    }

    number(50) . '<br>';

    function sum($n, $i){
        echo $n + $i. '<br>';
    }

    sum(10, 11) . '<br>';

    function nexseed($greeting, $name){
        return $greeting . '、' . $name . 'さん'. '<br>';
    }

    echo nexseed('こんにちは', 'seed');

    echo '演習問題1' . '<br>';

    function multiplication($num1, $num2){
        return 'recult = ' . $num1 * $num2 . '<br>';
    }

    echo multiplication(5, 6);

    echo '演習問題2' . '<br>';

    function average($num3, $num4){
        $sum2 = $num3 + $num4;
        $ave = $sum2 / 2;
        if ($ave >= 10){
            return $ave;
        }else{
            return '0';
        }
    }

    echo average(6,30);

    echo '演習問題3' . '<br>';

    function shopping($wallet, $plice){
        $manny = $wallet - $plice;
        echo '所持金：' . $wallet . '<br>';
        echo '購入物：' . $plice . '<br>';
        echo '残金：' . $manny . '<br>';

    }

    shopping(9000, 5000);

    echo '演習問題4' . '<br>';

    function result($num1, $num2){
        if($num1 >= $num2){
            return $num1;
        }else{
            return $num2;
        }
    }

    echo result(10, 4);