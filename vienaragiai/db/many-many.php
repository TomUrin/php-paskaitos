<?php

$host = '127.0.0.1';
$db   = '1_ragis';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$sql = 'SELECT p.title AS post, t.title AS tag, p.id AS post_id, t.id AS tag_id
from posts AS p
LEFT JOIN posts_tags AS pt
ON pt.post_id = p.id
LEFT JOIN tags AS t
ON pt.tag_id = t.id
';

$stmt = $pdo->query($sql);

$posts = $stmt->fetchAll();

$out = [];

foreach($posts as $post) {
    if (!isset($out[$post['post_id']])) {
        $out[$post['post_id']] = ['title' => $post['post'], 'tags' => []];
    }
    $out[$post['post_id']]['tags'][$post['post_id']] = $post['tag'];
}
echo '<pre>';
print_r($posts);

// echo '<ul>';
// foreach($posts as $post) {
//     echo '<li>'. $post['post'] . ' ' . $post['tag'] . '</li>';
// }
// echo '</ul>';