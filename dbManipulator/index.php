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
</body>
</html>