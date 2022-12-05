<?php
include "db.php";
function remover()
{
    getPDO()->query('DELETE FROM students WHERE ID = ' . $_GET['id']);
}

if (isset($_GET['id'])) {
    remover();
}

header("Location: index.php");
exit;
?>