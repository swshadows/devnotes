<?php
session_start();
require_once 'db/pdo.php';
require_once 'classes/NoteDAO.php';
require_once 'utils/checkValidate.php';
require_once 'utils/headTo.php';

$title = validate_size_void(30, $_POST['title']);
$body = validate_size_void(255, $_POST['body']);
$lang = validate_void($_POST['lang']);
$id = validate_void($_POST['id']);

if (!$title) {
    head_to('my_notes', ['type' => 'error', 'body' => 'Titulo inválido ou maior que 30 caracteres']);
}
if (!$body) {
    head_to('my_notes', ['type' => 'error', 'body' => 'Corpo da anotação inválido ou maior que 255 caracteres']);
}
if (!$lang) {
    head_to('my_notes', ['type' => 'error', 'body' => 'Linguagem inválida, tente novamente']);
}
if (!$id) {
    head_to('my_notes', ['type' => 'error', 'body' => 'ID inválido, tente novamente']);
}

$noteDAO = new NoteDAO($pdo);
$note = new Note($title, $body, $lang);
$note->setId($id);
$update = $noteDAO->update($note);
head_to('my_notes', ['type' => 'msg', 'body' => 'Nota atualizada com sucesso']);
