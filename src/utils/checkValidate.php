<?php

function validate_size_void(int $size, $var) {
    if ($var != '' && strlen($var) <= $size) {
        return $var;
    } else {
        return false;
    }
}

function validate_void($var) {
    if ($var != '') {
        return $var;
    } else {
        return false;
    }
}
