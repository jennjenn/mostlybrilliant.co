<?php

//get post from slug
function getPostFromSlug($slug){
	global $link;

	$slug = mysqli_real_escape_string($link, $slug);
	$q = mysqli_query($link, "SELECT * FROM blog_posts WHERE blog_slug = '$slug'");
	$r = mysqli_fetch_assoc($q);
	$gid = $r['blog_post_id'];

	return $gid;
}


function getPostDetails($pid){
	global $link;

	$pid = mysqli_real_escape_string($link, $pid);
	$q = mysqli_query($link, "SELECT * FROM blog_posts WHERE blog_post_id = '$pid'");
	$r = mysqli_fetch_assoc($q);

	return $r;
}

function getRecentPosts($limit = 10){
	global $link;

	$posts = array();
	// $pid = mysqli_real_escape_string($link, $pid);
	$q = mysqli_query($link, "SELECT * FROM blog_posts ORDER BY blog_added DESC LIMIT $limit");
	while($r = mysqli_fetch_assoc($q)){
		$posts[] = $r;
	}
	
	return $posts;
}
?>