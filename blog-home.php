<?php
require_once('connect.php');

$canonical = "https://mostlybrilliant.co/articles";
$title = "Articles &mdash; Mostly Brilliant &mdash; Product & UX Consulting";
require_once('includes/header.php');
require_once('lib/lib-blog.php');

$posts = getRecentPosts();
?>
<div id="blog">
    <div id="hero" class="hero-short grad-full">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Mostly Brilliant Articles</h1>
                </div>
            </div>
        </div>
    </div>

    
            <div id="article-list">
            <?php
            foreach($posts as $post){
                ?>
                <div class="row">
                    <div class="post-card col-xs-12 col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="post-image col-xs-12 col-sm-5">
                                <a href="/articles/<?php echo $post['blog_slug']; ?>"><img src="/img/articles/<?php echo $post['blog_img']; ?>" alt="<?php echo $post['blog_title']; ?>" /></a>
                            </div>
                            <div class="post-blurb col-xs-12 col-sm-7">
                                <h2><a href="/articles/<?php echo $post['blog_slug']; ?>"><?php echo $post['blog_title']; ?></a></h2>
                                <p><?php echo $post['blog_excerpt']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="alt-blue-section">
        <div class="container">
            <div class="row button-full">
                <div class="col-xs-12">
                    <a href="/services" class="button button-alt">Let's Work Together &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("includes/footer.php"); ?>