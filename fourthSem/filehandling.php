<?php
    // $f = fopen('hello.txt', 'r');
    // if(!$f){
    //     die('unable to open file.');
    // }  
    // $val = fread($f, filesize('hello.txt'));
    // echo$val;

    $f = fopen('hello.txt', 'r');
    while($a = fgetc($f)){
        echo $a;
        if($a == "."){
            break;
        }
    }
?>