<?php
// Conexão com o banco de dados (mysqli) — usada pela maior parte das páginas
require_once __DIR__ . '/config.php';

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_error()):
	echo "Error: " . mysqli_connect_error();
endif;
