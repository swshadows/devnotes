<?php if (isset($_SESSION['msg'])) : ?>
    <?php
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>
    <div class="msg <?= $msg['type'] ?>">
        <?= $msg['body'] ?>
    </div>
<?php endif; ?>