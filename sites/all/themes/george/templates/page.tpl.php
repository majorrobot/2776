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

    <div class="container" id="main">

        <div id="stars" class="container">
            <div class="row">
                 <div class="col-md-2 col-md-offset-1 star" id="star-1">
                    <h3>
                        Buy It
                    </h3>
                 </div>
                 <div class="col-md-2 col-md-offset-6 star" id="star-2">
                    <h3>
                        What is 2776?
                    </h3>
                </div>
            </div>  
            
            <div class="row">
                 <div class="col-md-2 star" id="star-3">
                    <h3>
                        <a href="https://soundcloud.com/2776album" target="_BLANK">Preview It</a>
                    </h3>
                 </div>
                 <div class="col-md-2 col-md-offset-8 star" id="star-4">
                    <h3>
                        The Talent
                    </h3>
                 </div>
            </div> 
            
            <div class="row row-short">
                 <div class="col-md-2 col-md-offset-1 star" id="star-5">
                    <h3>
                        Videos
                    </h3>
                 </div>
                 <div class="col-md-2 col-md-offset-6 star" id="star-6">
                    <h3>
                        Charity
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
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    
    
    <div class="block" rel="star-1" id="block-block-1">
        <div class="cover-container">
            <ul>
            <li>iTunes</li>
              <li>  Amazon</li>
               <li> Google Play</li>
              <li><a target="_BLANK" href="http://www.cdbaby.com/cd/2776">cdbaby</a></li>
            </ul>
        </div>
    </div>
    
    <div class="block" rel="star-2" id="block-block-2">
        <div class="cover-container">
            <p> The year is 2776, and on the thousandth birthday of America, an evil Alien (Martha Plimpton) threatens to destroy the nation, unless the President (Will Forte) and his Secret Service agent (Aubrey Plaza) can convince her it’s worth saving. Together with a cranky George Washington 
        (Paul F. Tompkins) they travel through our nation’s history—past AND future, taking on everything American &emdash; immigration, religion, the media, sports, politics, sex, droids, and rock n’ roll. Along the way they meet notable Americans, from God (Patton Oswalt) to the Common Cold (Aimee Mann). Can America be saved? Kind of. It’s complicated.
            </p>
        </div>
    </div>
    
    <div class="block" rel="star-3" id="block-block-3">
        <div class="cover-container">
            <p> 
                1. America, We’re Good Will Forte
2. Plot Song 1
Will Forte, Aubrey Plaza, Martha Plimpton
3. Escape From New York
Ashanti, Baron Vaughn, Andy Richter, Alonzo Bodden, Loaded Lux
4. Farewell California Paul Myers
5. God Blessed America Patton Oswalt & Bob Margolin
6. I’m Cured Aimee Mann
7. Live It Now
The Sklar Brothers
8. Mt. Rushmore
Al Jaffee, Dick Gregory, Dick Cavett, Joe Franklin, Margaret Cho, Marc Yaffee
9. Journey to Anywhen Reggie Watts, Right Said Fred, Mayim Bialik
10. Welcome to America Triumph the Insult Comic Dog, The Rebirth Brass Band
© 2014 The Levinson Brothers & Rob Kutner
11. Therapy Secession
Maria Bamford, Jonathan Katz
12. Forget the Alamo
Horatio Sanz, Brian Stack, Dave Hill
13. Plot Song 2
Will Forte, Aubrey Plaza,
Martha Plimpton, Paul F. Tompkins
14. Party on Your Grave Andrew WK
15. These Aren’t the Droids Neko Case, Kelly Hogan
16. Stop the Presses
Colton Dunn, Brandon Johnson, Zach Sherwin, Mike Mills
17. Battle of the Centuries
Will Forte, Paul F. Tompkins, Martha Plimpton, Basic Cable Band
18. (I Wanna) Take a Nap Joel Moss Levinson
19. US v. Rock n’ Roll
Nina Totenberg, Dahlia Lithwick
20. Mole Lotta Love
Bobcat Goldthwait, Sally Timms
21. I Can Do It Martha Plimpton
2776.us A benefit for OneKid OneWorld
22. Toymageddon
Yo La Tengo, Ira Glass, Eugene Mirman
23. Ooh I Love That Girl (PS I’m a Zombie) Miguelito
24. Bunker Bunker, Burning Love
Ed Helms
25. Aliens, Robots & Viruses Apple Sisters
26. Not What the Founders Intended Paul F. Tompkins, Eric Johnson
27. Canada—Up On Top Again Mark McKinney, Scott Thompson, Bruce McCulloch, Will Arnett, Samantha Bee, Cobie Smulders, Alex Trebek, Steven Page,
Craig Northey,
28. Finale
Will Forte, Martha Plimpton, Paul F. Tompkins
            </p>
        </div>
    </div>
    
    <div class="block" rel="star-4" id="block-block-4">
        <div class="cover-container">
            <p> The year is 2776, and on the thousandth birthday of America, an evil Alien (Martha Plimpton) threatens to destroy the nation, unless the President (Will Forte) and his Secret Service agent (Aubrey Plaza) can convince her it’s worth saving. Together with a cranky George Washington 
        (Paul F. Tompkins) they travel through our nation’s history—past AND future, taking on everything American &emdash; immigration, religion, the media, sports, politics, sex, droids, and rock n’ roll. Along the way they meet notable Americans, from God (Patton Oswalt) to the Common Cold (Aimee Mann). Can America be saved? Kind of. It’s complicated.
            </p>
        </div>
    </div>
    
    <div class="block" rel="star-5" id="block-block-5">
        <div class="cover-container">
            <p> Videos...
            </p>
        </div>
    </div>
    
    <div class="block" rel="star-6" id="block-block-6">
        <div class="cover-container">
            <p> Same info about the charity that appears in the album, with their logo
clicking through to their site, onekidoneworld.org
            </p>
        </div>
    </div>


