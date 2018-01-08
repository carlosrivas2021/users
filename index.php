<?php

require_once "QBuilder/lib/users.php";

$a = new Users();
$res = $a->list();
$res2 = $a->findId(1);
$res3 = $a->findPassId(1,1);
$res4 = $a->permission(2);
$res5 = $a->listUsersXRols();

var_dump($res5);