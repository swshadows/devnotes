<?php
require_once 'templates/header.php';
?>
<main class="index-create">
    <?php require_once 'components/msg.php'; ?>
    <h1>Criar uma nova anotação</h1>
    <form action="forms/add_note" method="POST">
        <label for="note-title">Titulo da anotação: </label>
        <input id="note-title" type="text" name="title" placeholder="Titulo da anotação: Max 30 caracteres">
        <label for="note-body">Corpo da anotação: </label>
        <textarea id="note-body" name="body" placeholder="Descreva sua anotação: Max 255 caracteres"></textarea>
        <label for="note-lang">Sobre qual linguagem é sua anotação? </label>
        <?php require_once 'components/languages.php'; ?>
        <input type="submit" value="Postar nota">
    </form>
</main>
<?php
require_once 'templates/footer.php';
?>