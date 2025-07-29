<?
$sql = "SELECT * FROM `posts` ORDER BY rate DESC LIMIT 5";
$most_popular_posts = $db->query($sql)->findAll();
//dd($most_popular_posts);

?>