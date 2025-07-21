<?
$title = 'Blog Home';
$header = 'Recent posts';

$sql = "SELECT * FROM `posts` ORDER BY `post_id` DESC";
$posts = $db->query($sql)->findAll();


$most_popular_posts = $posts;
//dd($most_popular_posts);

require_once VIEWS . '\index.tmpl.php';
?>