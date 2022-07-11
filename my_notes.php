<?php
session_start();
require_once 'app/templates/header.php';
require_once 'app/db/pdo.php';
require_once 'app/classes/NoteDAO.php';
$noteDAO = new NoteDAO($pdo);

$notes = $noteDAO->findAll();
if (sizeof($notes) == 0) {
    $message_void = [
        'title' => "Notas vazias",
        'body' => "Você não possui nenhuma nota no momento, tente criar uma no link <span class='emphasis'>Criar nova nota</span> acima",
    ];
}
?>
<main class="index-notes">
    <?php require_once 'app/templates/msg.php'; ?>
    <h1>Minhas notas</h1>
    <div class="notes">
        <?php if (sizeof($notes) > 0) : ?>
            <?php foreach ($notes as $note) : ?>
                <div class="note">
                    <h3> <?= $note['title'] ?> </h3>
                    <h6>Linguagem: <?= $note['lang'] ?></h6>
                    <span><?= $note['body'] ?></span>
                    <div class="actions">
                        <a href="app/del_note.php?id=<?= $note['id'] ?>" class="del"><i class="fa-solid fa-trash-can"></i></a>
                        <a href="edit_note.php?id=<?= $note['id'] ?>" class="edit"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                </div>
            <?php endforeach;  ?>
        <?php else : ?>
            <div class="message_void">
                <h3><?= $message_void['title'] ?></h3>
                <p><?= $message_void['body'] ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<script src="/public/js/preventDelete.js"></script>
<?php
require_once 'app/templates/footer.php';
?>