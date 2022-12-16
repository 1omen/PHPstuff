<!doctype html>
<html lang="ru" style="text-align: center">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Студентики</title>
</head>
<body>
<form action="addMem.php">
    <label for="name">Имя</label>
    <input type="text" name="name" id="name"><br>

    <label for="surname">Фамилия</label>
    <input type="text" name="surname" id="surname"><br>

    <select name="group" id="group">
        <option value="1">20ИТ-ПИ</option>
        <option value="2">19ИТ-ПИ</option>
    </select>
    <button type="submit">Отправить</button>
</form>
<hr>
<?php
include "db.php";
$list = getPDO()->query('SELECT * FROM students')->fetchAll(PDO::FETCH_OBJ);

// Тут терется id
//$initials = [];
//foreach ($list as $studentObject) {
//    $initials[] = $studentObject->surname . ' ' . mb_substr($studentObject->name, 0,1) . ".";
//}
//
//foreach ($initials as $imya) {
//    echo "<div>" . $imya . "</div>";
//}

// не доделал
//foreach ($list as $studentObject) {
//    array_walk($studentObject, function ($value, $key){
//        if ($key == "name")
//            $value
//    });
//}

// главный вариант
//foreach ($list as $studentObject) {
//    echo "<div id=" . $studentObject->ID . ">" . $studentObject->surname . ' ' . $studentObject->name . '
//    <input type="button" value="Удалить" onclick="deleteMem(this)"></div><br>';
//}

foreach ($list as $studentObject) {
    echo "<div id=" . $studentObject->ID . ">" . $studentObject->surname . ' ' . mb_substr($studentObject->name, 0,1) . ". " .
        '<input type="button" value="Удалить" onclick="deleteMem(this)"></div><br>';
}
?>
<script>
    function deleteMem(elem) {
        if (confirm('Вы уверены, что хотите удалить запись "' + elem.parentNode.innerText + '"?')) {
            location.href = "removeMem.php?id=" + elem.parentNode.id;
        } else {
            console.log('Изменений не произошло');
        }
    }
</script>
</body>
</html>