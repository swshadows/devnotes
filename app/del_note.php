<?php
session_start();
require_once 'db/pdo.php';
require_once 'classes/NoteDAO.php';
$noteDAO = new NoteDAO($pdo);

$id = $_GET['id'];

$noteDAO->delete($id);

$_SESSION['msg'] = "Nota #$id apagada!";

header('Location: /my_notes.php');
exit;
