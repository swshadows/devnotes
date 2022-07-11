<?php
session_start();
require_once 'db/pdo.php';
require_once 'classes/NoteDAO.php';

$noteDAO = new NoteDAO($pdo);

if ($_POST['title'] != '' && strlen($_POST['title']) <= 30) {
    $title = $_POST['title'];
} else {
    $_SESSION['error'] = 'Titulo vazio ou inválido! (Max 30 caracteres)';
    headToPage();
}

if ($_POST['body'] != '' && strlen($_POST['body']) <= 255) {
    $body = $_POST['body'];
} else {
    $_SESSION['error'] = 'Corpo da nota vazio ou inválido! (Máx 255 caracteres)';
    headToPage();
}

if ($_POST['lang'] != '') {
    $lang = $_POST['lang'];
} else {
    $_SESSION['error'] = 'Linguagem inválida';
    headToPage();
}

if ($_POST['id'] != '') {
    $id = $_POST['id'];
} else {
    $_SESSION['error'] = 'ID inválido';
    headToPage();
}


$note = new Note($title, $body, $lang);
$note->setId($id);

$update = $noteDAO->update($note);
$_SESSION['msg'] = "Nota #$id atualizada com sucesso!";

headToPage();

function headToPage() {
    header('Location: /my_notes.php');
    exit;
}
