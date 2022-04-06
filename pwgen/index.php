<?php
    function auth_pwgen1(){
    $pw = '';
    $c = 'bcdfghjkmnprstvwzBCDFGHJKMNPRSTVWZ'; //consonants except hard to speak ones
    $v = 'aeuAEU'; //vowels
    $a = $c.$v; //both

    //use two syllables...
    for($i=0;$i < 2; $i++){
    $pw .= $c[rand(0, strlen($c)-1)];
    $pw .= $v[rand(0, strlen($v)-1)];
    $pw .= $a[rand(0, strlen($a)-1)];
    }
    //... and add a nice number
    $pw .= rand(10,99);

    return $pw;
    }

    function auth_pwgen2(){
    $pw = '';
    $c = 'bcdfghjkmnprstvwzBCDFGHJKMNPRSTVWZ'; //consonants except hard to speak ones
    $v = 'aeuAEU'; //vowels
    $a = $c.$v; //both

    //use two syllables...
    for($i=0;$i < 2; $i++){
    $pw .= $c[rand(0, strlen($c)-1)];
    $pw .= $v[rand(0, strlen($v)-1)];
    }
    //... and add a nice number
    $pw .= rand(10,99);

    for($i=0;$i < 2; $i++){
    $pw .= $a[rand(0, strlen($a)-1)];
    }



    return $pw;
    }

    function auth_pwgen3(){
    $pw = '';
    $c = 'bcdfghjkmnprstvwzBCDFGHJKMNPRSTVWZ'; //consonants except hard to speak ones
    $v = 'aeuAEU'; //vowels
    $a = $c.$v; //both

    //use two syllables...
    for($i=0;$i < 2; $i++){
    $pw .= $c[rand(0, strlen($c)-1)];
    }
    //... and add a nice number
    $pw .= rand(10,99);

    for($i=0;$i < 2; $i++){
    $pw .= $v[rand(0, strlen($v)-1)];
    $pw .= $a[rand(0, strlen($a)-1)];
    }



    return $pw;
    }







for($i=0;$i<50;$i++) {
  echo auth_pwgen1() . "<br>";
  echo auth_pwgen2() . "<br>";
  echo auth_pwgen3() . "<br>";
}

?>
