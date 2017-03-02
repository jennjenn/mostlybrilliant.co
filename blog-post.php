<?php
require_once('connect.php');
require_once('lib/lib-blog.php');

$slug = $_GET['slug'];

$bid = getPostFromSlug($slug);
$post = getPostDetails($bid);
$name = $post['blog_title'];
$desc = $post['blog_excerpt'];
$img = "http://mostlybrilliant.co/img/blog/" . $slug . ".jpg";

$canonical = "http://mostlybrilliant.co/articles/$slug";
$title = "$name";

require_once('includes/header.php');
// require_once('partials/navbar.php');
// require_once('partials/blog-header.php');
?>

				<img src="/img/articles/<?php echo $slug; ?>.jpg" alt="<?php echo $name; ?>" />
				<h1 id="post-title"><?php echo $name; ?></h1>
			</div>
			
			<div id="post-body">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<?php require_once("articles/$slug.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="post-comments" class="col-xs-12 col-md-6 col-md-offset-3">
			<div id="disqus_thread"></div>
			<script>
			var disqus_config = function () {
			this.page.url = "<?php echo $canonical; ?>"
			};
			
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = '//wanderling.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
	</div>
<?php require_once('includes/footer.php'); ?>