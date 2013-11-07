jQuery( document ).ready(function() {
	
	// RSS icons
	jQuery('#navigation a.feed-icon').prepend('<span class="icon-rss"></span> ');
	jQuery('#navigation a.feed-icon span.feed-text').css('display', 'none');
	
	// change le titre de 'Blogs' par actualités
	jQuery('body.page-blog h1').text('Actualités');
	
	jQuery('#latest-news h2').prepend('<span class="icon-newspaper"></span> ');
	
	// Footer tweak
	jQuery('#footer div.region-footer-first ul li a, #footer div.region-footer-second ul li a,#latest-news ul li a').prepend('<span class="icon-arrow-right"></span> ');
	jQuery('#block-menu-menu-social div.content li:nth-child(1) a').prepend('<span class="icon-github"></span> '); // github
	jQuery('#block-menu-menu-social div.content li:nth-child(2) a').prepend('<span class="icon-twitter"></span> '); // twitter
	jQuery('#block-menu-menu-social div.content li:nth-child(3) a').prepend('<span class="icon-linkedin"></span> '); // linkedIn
});
