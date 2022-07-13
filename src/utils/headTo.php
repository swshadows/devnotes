<?php
function head_to(string $page, $msg) {
    $_SESSION['msg']['type'] = $msg['type'];
    $_SESSION['msg']['body'] = $msg['body'];
    header('Location: ' . $page);
    exit;
}
