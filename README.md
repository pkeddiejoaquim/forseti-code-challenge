# forseti-code-challenge
Mensagem-Forseti-teste
Platforma de Desenvolvimento Windows 10
Sistema desenvolvido em PHP
servidor de pagina Apache
Framework Laravel, Javascript e CSS, Bootstrap
Banco de Dados Mysql, arquivo forseti.sql, dados de configuração de Banco encontarra-se
em /config/database.php :
'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forseti'),
            'username' => env('DB_USERNAME', 'eproducao'),
            'password' => env('DB_PASSWORD', '*k2k3@nos****'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],


usuario de sistema : usuario@forseti.com.br  senha: 12345
usuario de sistema : solucoes@forseti.com.br senha: 67890

o sistema apresenta formatação na apresentação de boas praticas na area de desenvolvimento e
programação, tendo assim a perspectiva de nortemanto no bom desenvolvimento, devendo assim 
para o seu funcionamento, ser mantida todas os requerimentos tenicos das ferrmentas usandas 
para o desenvolvimento.
