<?
require_once COMPONENTS . '\header.php';
?>

<main class="container py-3">
    <div class="row">
        <div class="col-9">
            <h3><?=$header ?? ""?></h3>
            <form action="create" method="POST">
                <!-- заголовок -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Post title" value="<?= old('title')?>">
                    <div class="invalid-feedback d-block">
                        <?= $errors['title'] ?? "" ?>
                    </div>
                </div>
                
                <!-- описание -->
                <div class="mb-3">
                    <label for="descr" class="form-label">Description</label>
                    <input type="text" class="form-control" id="descr" name="descr" placeholder="Post description" value="<?= old('descr')?>">
                    <div class="invalid-feedback d-block">
                        <?= $errors['descr'] ?? "" ?>
                    </div>
                </div>
                
                <!-- контент -->
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea type="text" class="form-control" id="content" name="content" rows="15" placeholder="Post content"><?= old('content')?></textarea>
                    <div class="invalid-feedback d-block">
                        <?= $errors['content'] ?? "" ?>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</main>

<?
require_once COMPONENTS . '\footer.php';
?>