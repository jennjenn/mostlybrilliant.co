<?php
require_once('connect.php');
require_once('lib/lib-blog.php');

$slug = $_GET['slug'];

$bid = getPostFromSlug($slug);
$post = getPostDetails($bid);
$name = $post['blog_title'];
$desc = $post['blog_excerpt'];
$postimg = $post['blog_img'];
$img = "http://mostlybrilliant.co/img/articles/$postimg";

$canonical = "https://mostlybrilliant.co/articles/$slug";
$title = "$name &mdash; Mostly Brilliant &mdash; Product & UX Consulting";

require_once('includes/header.php');
// require_once('partials/navbar.php');
// require_once('partials/blog-header.php');
?>
	<div id="blog">
		<div id="single-article" class="container">
			<div id="post-intro" class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<img src="/img/articles/<?php echo $postimg; ?>" alt="<?php echo $name; ?>" />
					<h1 id="post-title"><?php echo $name; ?></h1>
				</div>
			</div>
			<div id="post-body">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<?php require_once("articles/$slug.php"); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="post-comments" class="col-xs-12 col-md-8 col-md-offset-2">
					<div id="disqus_thread"></div>
					<script>
					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					
					var disqus_config = function () {
					this.page.url = '<?php echo $canonical; ?>';  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = '<?php echo $slug; ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://mostly-brilliant.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div>
			</div>
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
<?php require_once('includes/footer.php'); ?>