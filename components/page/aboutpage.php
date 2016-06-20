<?php
/**
 * Template part for displaying aboutpage.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wardz_Design
 */

?>


<div class="page-container">
       <section class="panel">
        <div class="page-about">
            <div class="intro-container">
                <div id="hero" class="hero1">
                    <div class="headertext">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="panel">
        <div class="page-about">
            <div class="intro-container">
                <div id="hero" class="hero2">
                    <div class="headertext">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="panel">
        <div class="page-about">
            <div class="intro-container">
                <div id="hero" class="hero3">
                    <div class="headertext">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="panel">
        <div class="page-about">
            <div class="intro-container">
                <div id="hero" class="hero4">
                    <div class="headertext">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="panel">
        <div class="page-about">
            <div class="intro-container">
                <div id="hero" class="hero5">
                    <div class="headertext">
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