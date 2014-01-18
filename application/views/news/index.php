<?php foreach ($news as $news_item): ?>
    <div class="hero-unit">
        <h2><?php echo $news_item['title'] ?></h2>
        <div id="main">
            <?php echo $news_item['text'] ?>
        </div>
        <p><a href="news/<?php echo $news_item['slug'] ?>" class="btn btn-primary">View article</a></p>
    </div>
<?php endforeach ?>
