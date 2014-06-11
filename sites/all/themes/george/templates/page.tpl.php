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

<div class="site-wrapper">

  <div class="site-wrapper-inner">

     <div class="block container cover-container" rel="star-1" id="block-block-1">
        <div class="row">
            
        
            
            <p> The year is 2776, and on the thousandth birthday of America, an evil Alien (Martha Plimpton) threatens to destroy the nation, unless the President (Will Forte) and his Secret Service agent (Aubrey Plaza) can convince her it’s worth saving. Together with a cranky George Washington 
        (Paul F. Tompkins) they travel through our nation’s history—past AND future, taking on everything American &emdash; immigration, religion, the media, sports, politics, sex, droids, and rock n’ roll. Along the way they meet notable Americans, from God (Patton Oswalt) to the Common Cold (Aimee Mann). Can America be saved? Kind of. It’s complicated.
            </p>
        </div>
    </div>

    <div class="container" id="main">

        <div class="row">
             <div class="col-md-2 col-md-offset-1 star" id="star-1">
                <h3>
                    What is 2776?
                </h3>
             </div>
             <div class="col-md-2 col-md-offset-6 star" id="star-2"></div>
        </div>  
        
        <div class="row">
             <div class="col-md-2 star" id="star-3"></div>
             <div class="col-md-2 col-md-offset-8 star" id="star-4"></div>
        </div> 
        
        <div class="row row-short">
             <div class="col-md-2 col-md-offset-1 star" id="star-5"></div>
             <div class="col-md-2 col-md-offset-6 star" id="star-6"></div>
        </div> 
      
        


    </div>
    
   
    
  </div>

</div>

