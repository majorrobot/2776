<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
 
?>

	<?php if(current_path() != "node"): ?>
		
		 <?php print render($page['sidebar_first']); ?>
		  <?php print render($page['header']); ?>
		    <?php print render($page['footer']); ?>
		      <?php print render($page['content']); ?>
		
	<?php else: ?>


    <div class="container" id="main">

        <div id="stars" class="container">
            <div class="row">
                 <div class="col-sm-2 col-sm-offset-1 star" id="star-1">
                    <h3>
                        Buy It
                    </h3>
                 </div>
                 <div class="col-sm-2 col-sm-offset-6 star" id="star-2">
                    <h3>
                        What is 2776?
                    </h3>
                </div>
            </div>  
            
            <div class="row">
                 <div class="col-sm-2 star star-fake" id="star-3">
                    <h3>
                        <a href="https://soundcloud.com/2776album" target="_BLANK">Preview It</a>
                    </h3>
                 </div>
                 <div class="col-sm-2 col-sm-offset-8 star" id="star-4">
                    <h3>
                        The Talent
                    </h3>
                 </div>
            </div> 
            
            <div class="row row-short">
                 <div class="col-sm-2 col-sm-offset-1 star" id="star-5">
                    <h3>
                        Videos
                    </h3>
                 </div>
                 <div class="col-sm-2 col-sm-offset-6 star" id="star-6">
                    <h3>
                        The Charity
                    </h3>
                 </div>
            </div> 
        </div>
        
        <div id="card-container" class="container">
            <div id="card-parent">
                <div id="card">
                    <div class="front">
                        <img src="<?php echo url('sites/all/themes/george/images/logo_cover_circle.png');?>" />
                    </div>
                    <div class="back">
                    	<div class="circle"></div>
                    </div>
                </div>
            </div>
            
            <footer class="container">
			<ul>
				<li>Illustration by <a href="http://www.heatherbradley.me" target="_BLANK">Heather Bradley</a></li>
				<li class="last">Site by <a href="http://majorrobot.com" target="_BLANK">Major Robot Interactive</a></li>
			</ul>
		</footer>
        </div>
      
      
      
    </div>
    
    
    <?php print render($page['star1']); ?>
    <?php print render($page['star2']); ?>
    <?php print render($page['star3']); ?>
    <?php print render($page['star4']); ?>
    <?php print render($page['star5']); ?>
    <?php print render($page['star6']); ?>


<?php endif; ?>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51914865-1', '2776.us');
  ga('send', 'pageview');

</script>

