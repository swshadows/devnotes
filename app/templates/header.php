<?php
require 'app/server/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devnotes</title>
    <link rel="shortcut icon" href="/public/favicon.png">
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <a href="/">
            <img class="app-icon" src="/public/favicon.png">
        </a>
        <ul class="options">
            <li><span>|</span></li>
            <li><span>Devnotes</span></li>
            <li><span>|</span></li>
            <li><a href="/create_note.php">Criar nova nota</a></li>
            <li><span>|</span></li>
            <li><a href="/my_notes.php">Ver minhas notas</a></li>
        </ul>
    </header>