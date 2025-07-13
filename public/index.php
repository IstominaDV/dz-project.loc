<?
$title = 'Blog Home';
$header = 'Recent posts';

$posts = [
    1 => [
        'title' => 'Post 1',
        'descr' => 'Description 1',
        'slug' => 'post-1'
    ],
    2 => [
        'title' => 'Post 2',
        'descr' => 'Description 2',
        'slug' => 'post-2'
    ],
    3 => [
        'title' => 'Post 3',
        'descr' => 'Description 3',
        'slug' => 'post-3'
    ],
    4 => [
        'title' => 'Post 4',
        'descr' => 'Description 4',
        'slug' => 'post-4'
    ],
    5 => [
        'title' => 'Post 5',
        'descr' => 'Description 5',
        'slug' => 'post-5'
    ],
];

$most_popular_posts = [
    1 => [
        'title' => 'Post 1',
        'slug' => 'post-1'
    ],
    2 => [
        'title' => 'Post 2',
        'slug' => 'post-2'
    ],
    3 => [
        'title' => 'Post 3',
        'slug' => 'post-3'
    ],
    4 => [
        'title' => 'Post 4',
        'slug' => 'post-4'
    ],
    5 => [
        'title' => 'Post 5',
        'slug' => 'post-5'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? "PROJECT" ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">PROJECT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">New Post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-3">
            <div class="row">
                <div class="col-3">
                    <h3>Hot posts</h3>
                    <ul class="list-group">
                        <?foreach ($most_popular_posts as $post) : ?>
                            <li class="list-group-item" aria-current="true"><a href="?<?=$post['slug']?>"><?= $post['title']?></a></li>
                        <?endforeach?>
                    </ul>
                    
                </div>
                <div class="col-9">
                    <h3><?=$header ?? ""?></h3>
                    <?foreach ($posts as $post) : ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><a href="?<?=$post['slug']?>"><?=$post['title']?></a></h5>
                                <p class="card-text"><?=$post['descr']?></p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
        </main>

        <footer>
            <div class="text-bg-dark p-3 text-center">
                &copy; Copyright <?= date('Y') ?>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>