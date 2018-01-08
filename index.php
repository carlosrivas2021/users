<?php

require_once "QBuilder/lib/users.php";

$a = new Users();
$res = $a->list();
$res2 = $a->findId(1);
$res3 = $a->findPassId(1,1);
$res4 = $a->permission(3);

var_dump($res4);