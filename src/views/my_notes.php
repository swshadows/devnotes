<?php
require_once 'templates/header.php';
require_once __APP_SRC__ . '/database/pdo.php';
require_once __APP_SRC__ . '/controllers/NoteDAO.php';
$noteDAO = new NoteDAO($pdo);

$notes = $noteDAO->findAll();
if (sizeof($notes) == 0) {
    $message_void = [
        'title' => "Notas vazias",
        'body' => "Você não possui nenhuma nota no momento, tente criar uma no link <span class='emphasis'><a href='/create_note'>Criar nova nota</a></span> aqui ou acima",
    ];
}
?>
<main class="index-notes">
    <?php require_once 'components/msg.php'; ?>
    <h1>Minhas notas</h1>
    <div class="notes">
        <?php if (sizeof($notes) > 0) : ?>
            <?php foreach ($notes as $note) : ?>
                <div class="note">
                    <h3> <?= $note['title'] ?> </h3>
                    <h6>Linguagem: <?= $note['lang'] ?></h6>
                    <span><?= $note['body'] ?></span>
                    <div class="actions">
                        <a class="del" data-id="<?= $note['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
                        <a href="edit_note?id=<?= $note['id'] ?>" class="edit"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                </div>
            <?php endforeach;  ?>
        <?php endif; ?>
    </div>
    <?php if (sizeof($notes) <= 0) : ?>
        <div class="message_void">
            <h3><?= $message_void['title'] ?></h3>
            <p><?= $message_void['body'] ?></p>
        </div>
    <?php endif; ?>
</main>

<div class="modal">
    <div class="modal-content">
        Deseja mesmo apagar a nota? Essa ação é irreversível
        <div>
            <a href="forms/del_note?id=" class="del-modal">Apagar</a>
            <a class="cancel-modal">Cancelar</a>
        </div>
    </div>
</div>

<script src="/js/modalDelete.js"></script>
<?php
require_once 'templates/footer.php';
?>