<?php
include 'MyList.php';

$myList = new MyList();
$myList->add(1);
$myList->add(5);
$myList->add(1);

echo $myList->get(1);