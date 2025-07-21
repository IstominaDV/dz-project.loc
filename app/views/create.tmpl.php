<?
require_once COMPONENTS . '\header.php';
?>

<main class="container py-3">
    <div class="row">
        <div class="col-9">
            <h3><?=$header ?? ""?></h3>
            <form action="" method="POST">
                <!-- заголовок -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Post title">
                </div>
                <!-- описание -->
                <div class="mb-3">
                    <label for="descr" class="form-label">Description</label>
                    <input type="text" class="form-control" id="descr" name="descr" placeholder="Post description">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea type="text" class="form-control" id="content" name="content" rows="15" placeholder="Post content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</main>

<?
require_once COMPONENTS . '\footer.php';
?>