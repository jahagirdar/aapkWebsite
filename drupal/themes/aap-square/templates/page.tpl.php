<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id ="wrapper" class="sg=35 clearfix">
		<div id="sidebar_right" class="column sidebar <?php print ($class_sidebar_right); ?>"> 
		<?php print render($page['sidebar_right']); ?>
		</div>
	<div id ="wrapper" class="sg=26 clearfix">
		<div id ="wrapper" class="sg=26 clearfix">
			<div id="header" class="column header <?php print ($class_header);?>">
			<?php print render($page['header']); ?>
			</div>
		</div>
	<div id ="wrapper" class="sg=26 clearfix">
			<div id="highlighted" class="column highlighted <?php print ($class_highlighted);?>">
<marquee>
			<?php print render($page['highlighted']); ?>
</marquee>
			</div>
	</div>
	<div id ="wrapper" class="sg=26 clearfix">
			<div id="content1_left" class="content highlighted <?php print ($class_content1_left);?>">
			<?php print render($page['content1_left']); ?>
			</div>
			<div id="content1_center" class="content highlighted <?php print ($class_content1_center);?>">
			<?php print render($page['content1_center']); ?>
			</div>
			<div id="content1_right" class="content highlighted <?php print ($class_content1_right);?>">
			<?php print render($page['content1_right']); ?>
			</div>
	</div>
	<div id ="wrapper" class="sg=26 clearfix">
			<div id="content2_left" class="content highlighted <?php print ($class_content2_left);?>">
			<?php print render($page['content2_left']); ?>
			</div>
			<div id="content2_center" class="content highlighted <?php print ($class_content2_center);?>">
			<?php print render($page['content2_center']); ?>
			</div>
			<div id="content2_right" class="content highlighted <?php print ($class_content2_right);?>">
			<?php print render($page['content2_right']); ?>
			</div>
	</div>
	<div id ="wrapper" class="sg=26 clearfix">
			<div id="footer1" class="footer highlighted <?php print ($class_footer1);?>">
			<?php print render($page['footer1']); ?>
 `<?php 
    if(!user_is_logged_in() ){
        print drupal_render(drupal_get_form('user_login'));
    }else{
        print "You are already logged in!";
   }?>` 

			</div>
</div>
</div>
