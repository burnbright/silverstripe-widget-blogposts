<?php

class RecentBlogPosts extends Widget{

	static $title = "Recent Posts";
	static $cmsTitle = "Recent Blog Posts";
	static $description = "List recent posts for this blog.";

	function Posts($num=5) {
		return DataObject::get("BlogEntry", "", "Date DESC","", $num);
	}

}