<div class="col-3">
    <h3>Hot posts</h3>
    <ul class="list-group">
        <?foreach ($most_popular_posts as $post) : ?>
            <li class="list-group-item" aria-current="true"><a href="?<?=$post['slug']?>"><?= $post['title']?></a></li>
        <?endforeach?>
    </ul>       
</div>