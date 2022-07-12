<?php
session_start();
require_once __APP_SRC__ . '/database/pdo.php';
require_once __APP_SRC__ . '/controllers/NoteDAO.php';
require_once __APP_SRC__ . '/utils/checkValidate.php';
require_once __APP_SRC__ . '/utils/headTo.php';

$id = validate_void($_GET['id']);

if (!$id) {
    head_to('my_notes', ['type' => 'error', 'body' => 'Erro ao apagar nota, tente novamente']);
}

$noteDAO = new NoteDAO($pdo);
$id = (int) $_GET['id'];
$noteDAO->delete($id);
head_to('my_notes', ['type' => 'msg', 'body' => 'Nota apagada com sucesso']);
