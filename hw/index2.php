<?php

include 'autoload.php';

$b = new B();

echo $b
    ->setInnerText('Hello World')
    ->html();

    $i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();

    $u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();