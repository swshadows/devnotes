<?php

$HTTP = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';

$BASE_URL = $HTTP . "://" . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/';
