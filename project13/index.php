<?php
    $text = file('user.txt')
    
    echo '<pre>';
    echo print_r($text);
    echo '</pre>';

    $text2 = file_get_contents('users.txt')
    echo $text2;

    $string1 = '54, 123, Tran Hong Son';

    file_put_contents('users.txt');
    echo $text3;

    $string2 = '\n56, 456, Cao Van Tan';

    file_put_contents('users.txt', $string 2, FILE_APPEND);

    $text5 = file_get_contents('users.txt');
    echo $text5;



?>