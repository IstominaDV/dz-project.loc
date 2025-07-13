<?
require_once COMPONENTS . '\header.php';
?>

<main class="container py-3">
    <div class="row">
    <?
    require_once COMPONENTS . '\sidebar.php';
    ?>
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

<?
require_once COMPONENTS . '\footer.php';
?>