<?php
session_start();
require_once __APP_SRC__ . '/database/pdo.php';
require_once __APP_SRC__ . '/controllers/NoteDAO.php';
require_once __APP_SRC__ . '/utils/checkValidate.php';
require_once __APP_SRC__ . '/utils/headTo.php';

$title = validate_size_void(30, $_POST['title']);
$body = validate_size_void(255, $_POST['body']);
$lang = validate_void($_POST['lang']);
$id = validate_void($_POST['id']);

if (!$id) {
    head_to('/edit_note?id=' . $id, ['type' => 'error', 'body' => 'ID inválido, tente novamente']);
}
if (!$title) {
    head_to('/edit_note?id=' . $id, ['type' => 'error', 'body' => 'Titulo inválido ou maior que 30 caracteres']);
}
if (!$body) {
    head_to('/edit_note?id=' . $id, ['type' => 'error', 'body' => 'Corpo da anotação inválido ou maior que 255 caracteres']);
}
if (!$lang) {
    head_to('/edit_note?id=' . $id, ['type' => 'error', 'body' => 'Linguagem inválida, tente novamente']);
}

$noteDAO = new NoteDAO($pdo);
$note = new Note($title, $body, $lang);
$note->setId($id);
$update = $noteDAO->update($note);
head_to('/edit_note?id=' . $id, ['type' => 'success', 'body' => 'Nota atualizada com sucesso']);
