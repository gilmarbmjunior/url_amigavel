<a href="home">home</a> /
<a href="aluno">aluno</a> /
<a href="monitor">monitor</a> /
<a href="usuario">usuario</a>

<hr>

<?php

$url = str_replace('/url_amigavel/', '', $_SERVER['REQUEST_URI']);

switch ($url) {
    case 'aluno':
        require_once 'page_aluno.php';
        break;
    case 'monitor':
        require_once 'page_monitor.php';
        break;
    case 'usuario':
        require_once 'page_usuario.php';
        break;
    default:
        require_once 'page_home.php';
        break;
}
