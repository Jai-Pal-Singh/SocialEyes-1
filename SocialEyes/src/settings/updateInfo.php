<?php
session_start();
include_once '../postgres/query.php';
$o=new query();
if($_POST['dob']!=""){
	$o->updateDOB($_SESSION['user']['id'], $_POST['dob']);
}
if($_POST['sex']!=""){
	$o->updateSex($_SESSION['user']['id'], $_POST['sex']);
}
if($_POST['phone']!=""){
	$o->updatePhone($_SESSION['user']['id'], $_POST['phone']);
}
if($_POST['nation']!=""){
	$o->updateNation($_SESSION['user']['id'], $_POST['nation']);
}
if($_POST['hobbies']!=""){
	$o->updateHobbies($_SESSION['user']['id'], htmlspecialchars($_POST['hobbies']));
}
header("Location: ../../web/settings.php");
exit(0);