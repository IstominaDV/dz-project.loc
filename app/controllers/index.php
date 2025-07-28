<?
$title = 'Blog Home';
$header = 'Recent posts';

$sql = "SELECT * FROM `posts` ORDER BY `post_id` DESC";
$posts = $db->query($sql)->findAll();

$sql = "SELECT * FROM `posts` ORDER BY rate DESC LIMIT 5";
$most_popular_posts = $db->query($sql)->findAll();
//dd($most_popular_posts);

require_once VIEWS . '\index.tmpl.php';
?>