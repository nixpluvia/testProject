<?php

$title = $_GET ['title'];
$body = $_GET ['body'];

$sql = "
INSERT INTO article
SET regDate = NOW(),
title = '{$title}',
`body` = '{$body}';
";

$dbHost = '127.0.0.1';
$dbLoginId = 'root';
$dbLoginPw = '';
$dbName = 'site2';

$conn = mysqli_connect($dbHost, $dbLoginId, $dbLoginPw, $dbName);

mysqli_query($conn, $sql);