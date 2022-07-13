<?
require_once 'Router.php';

Router::register('/', '/views/index.php');
Router::register('/create_note', '/views/create_note.php');
Router::register('/edit_note', '/views/edit_note.php');
Router::register('/my_notes', '/views/my_notes.php');


Router::register('/forms/add_note', '/controllers/forms/add_note.php');
Router::register('/forms/del_note', '/controllers/forms/del_note.php');
Router::register('/forms/update_note', '/controllers/forms/update_note.php');
