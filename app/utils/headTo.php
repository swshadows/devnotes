<?php
function head_to(string $page, $msg) {
    $_SESSION[$msg['type']] = $msg['body'];
    header('Location: /' . $page . '.php');
    exit;
}
