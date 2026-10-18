<?php
// Configuração única do banco de dados.
// Os valores podem ser sobrescritos por variáveis de ambiente (definidas no docker-compose.yml).

define('DB_HOST', getenv('DB_HOST') ?: 'mariadb-server');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') !== false ? getenv('DB_PASS') : '123');
define('DB_NAME', getenv('DB_NAME') ?: 'task');
