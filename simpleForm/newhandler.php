<?php
echo  json_encode(
    [
        "POST" => $_POST,
        "GET" => $_GET
    ],
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
)
?>