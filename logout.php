<?php
session_start();

// Destruir todas as variáveis de sessão
$_SESSION = array();

// Destruir a sessão atual
session_destroy();

// Redirecionar o usuário de volta para a página de login ou qualquer outra página desejada
header("Location: login.php");
exit();
?>
