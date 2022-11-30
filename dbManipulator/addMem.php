<?php
include "db.php";

$getcha = 'SELECT name FROM students_test.groups where ID = ' . $_GET['group'];
$group = getPDO()->query($getcha)->fetchColumn();

getPDO()->prepare('INSERT INTO students (`name`, `surname`, `group`) VALUES (:surname, :name, :group)')->execute([
    'name' => $_GET['name'],
    'surname' => $_GET['surname'],
    'group' =>$group,
]);
