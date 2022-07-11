<?php
if (isset($_SESSION['msg'])) {
    echo "<div class='msg'>";
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    echo "</div>";
}

if (isset($_SESSION['error'])) {
    echo "<div class='error'>";
    echo $_SESSION['error'];
    unset($_SESSION['error']);
    echo "</div>";
}
