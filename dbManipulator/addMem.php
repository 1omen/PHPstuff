<?php
include "db.php";

$getcha = 'SELECT name FROM students_test.groups where ID = ' . $_GET['group']; //создаю запрос для получения названия группы по ее номеру, который получен методом GET
$group = getPDO()->query($getcha)->fetchColumn(); //привожу полученный массив в строку

getPDO()->prepare('INSERT INTO students (`name`, `surname`, `group`) VALUES (:surname, :name, :group)')->execute([
    'name' => $_GET['name'],
    'surname' => $_GET['surname'],
    'group' =>$group,
]);
