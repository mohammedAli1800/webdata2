<?php
require_once('../app/core/utils.php');

if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
?>

<!DOCTYPE html>
<html lang="en">
    <link href= "/css/boostrap.css" rel="stylesheet" type="text/css"/>
    <title>COSC 4806</title>
    <h1></h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>