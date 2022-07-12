<?php
require_once 'templates/header.php';
require_once __APP_SRC__ . '/database/pdo.php';
require_once __APP_SRC__ . '/controllers/NoteDAO.php';

$noteDAO = new NoteDAO($pdo);

$id = $_GET['id'];

$note = $noteDAO->findById($id);

?>
<main class="index-create">
    <?php require_once 'components/msg.php'; ?>
    <h1>Editar a anotação #<?= $note['id'] ?></h1>
    <form action="forms/update_note" method="POST">
        <label for="note-title">Titulo da anotação: </label>
        <input id="note-title" type="text" name="title" placeholder="Titulo da anotação: Max 30 caracteres" value="<?= $note['title']; ?>">
        <label for="note-body">Corpo da anotação: </label>
        <textarea id="note-body" name="body" placeholder="Descreva sua anotação: Max 255 caracteres"><?= $note['body']; ?></textarea>
        <label for="note-lang">Sobre qual linguagem é sua anotação? (Original: <?= $note['lang']; ?>)</label>
        <?php require_once 'components/languages.php'; ?>
        <input type="hidden" name="id" value="<?= $note['id']; ?>">
        <input type="submit" value="Postar nota">
    </form>
</main>
<?php
require_once 'templates/footer.php';
?>