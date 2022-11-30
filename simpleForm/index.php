<!DOCTYPE html>
<html>
<head>
    <title>METANIT.COM</title>
    <meta charset="utf-8">
</head>
<body>

<h2>Введи свои данные:</h2>

<form method="get" action="newhandler.php" id="mainforma">
    <input type="text" name="notreally">
    <input type="number" NAME="something">
    <input type="submit" value="submit">
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $('#mainforma').on("submit", function () {
        $('#mainforma').attr('name', 'omen');
        $.post('newhandler.php?id=2', {key: "valval"}, function (data) {
            console.log(data)
        });
        return false
    })

</script>
</html>