<?php
/**
 * Template part for displaying page intro.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wardz_Design
 */

?>

    <nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="sticky-head">
	<img class="headerblacklogo" src="<?php bloginfo('template_url'); ?>/images/blacklogo.svg">
       <a href="www.wardzdesign.dev/about">
           <img class="headeraboutbutton" src="<?php bloginfo('template_url'); ?>/images/headeraboutbutton.svg"></a>
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Top Menu', 'wardz-design' ); ?></button>
	</div>
    </nav>
    <div class="page-container">
       <section class="panel">
        <div class="page-intro">
            <div class="intro-container">
                <div id="hero" class="hero5">
                    <div class="headertext">
                        <h1 class="headertextleft">IMAGINATION</h1>
                        <h1 class="headertext headertextright">INVENTED</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-wrapper">
            <div class="scroll-button">
                <div class="scroll-img">
                    <img src="<?php bloginfo('template_url'); ?>/images/scrollmouse.svg">
                </div>
            </div>

        </div>
        </section>
        <section class="panel">
        <div class="page-portfolio">
            <div class="portfolio-container">
                <div id="portfoliobackground">
                    <div>
                        <h1 class="portfoliotitle">DROOL</h1>
                        <div class="works-col">
                            <div class="work">
                                <div class="work-outer">
                                    <div class="work-inner sitea">
                                        <a href="http://wardzdesign.com/work/sitea/">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="works-col">
                            <div class="work">
                                <div class="work-outer">
                                    <div class="work-inner siteb">
                                        <a href="http://wardzdesign.com/work/sitea/">
                                            <span class="image-container" style="background-image: url(&quot;http://engzell.me/wp-content/uploads/2015/03/fitwhey-thumbnail-3-410x880.jpg&quot;);"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="works-col">
                            <div class="work">
                                <div class="work-outer">
                                    <div class="work-inner sitec">
                                        <a href="http://wardzdesign.com/work/sitea/">
                                            <span class="image-container" style="background-image: url(&quot;http://engzell.me/wp-content/uploads/2015/03/fitwhey-thumbnail-3-410x880.jpg&quot;);"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="works-col">
                            <div class="work">
                                <div class="work-outer">
                                    <div class="work-inner sited">
                                        <a href="http://wardzdesign.com/work/sitea/">
                                            <span class="image-container" style="background-image: url(&quot;http://engzell.me/wp-content/uploads/2015/03/fitwhey-thumbnail-3-410x880.jpg&quot;);"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="works-col">
                            <div class="work">
                                <div class="work-outer">
                                    <div class="work-inner sitee">
                                        <a href="http://wardzdesign.com/work/sitea/">
                                            <span class="image-container" style="background-image: url(&quot;http://engzell.me/wp-content/uploads/2015/03/fitwhey-thumbnail-3-410x880.jpg&quot;);"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            // Defining a function to set size for #hero 
            function fullscreen() {
                jQuery('#hero').css({
                    width: jQuery(window).width(),
                    height: jQuery(window).height()
                });
            }
            fullscreen();

            // Run the function in case of window resize
            jQuery(window).resize(function () {
                fullscreen();
            });

        });
    </script>
    