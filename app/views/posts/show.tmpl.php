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
            <div><?=$post['content']?></div>                                        
        </div>
    </div>
</main>

<?
require_once COMPONENTS . '\footer.php';
?>