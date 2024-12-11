<?php

use Illuminate\Database\Capsule\Manager as Capsule;

use function Symfony\Component\Clock\now;

// Incluir o arquivo bootstrap para carregar o autoloader e as variáveis de ambiente
require __DIR__ . '/bootstrap.php';

// Configuração da conexão com o banco de dados
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => $_ENV['DB_CONNECTION'],
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_DATABASE'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_0900_ai_ci',
    'prefix' => '',
]);

// Tornar a conexão global e iniciar o Eloquent ORM
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Capsule::table('posts')->insert([
//     'title' => 'Novo Post',
//     'content' => 'Conteúdo do novo post',
//     'author' => 'Administrador',
//     'publication_date' => now(),
//     'status' => 'draft',
//     'category_id' => 1,
//     'cover_image' => 'cover.jpg',
//     'slug' => 'novo-post',
//     'tags' => 'tag1, tag2, tag3',
//     'created_at' => now(),
//     'updated_at' => now(),
// ]);