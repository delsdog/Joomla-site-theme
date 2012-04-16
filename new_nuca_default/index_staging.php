<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>

<script src="<?php echo $this->baseurl ?>/templates/new_nuca/js.jquery.js"></script>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_nuca/css/template.css" type="text/css" />


</head>
<body id="page_bg">

<div id="container">
	<div id="header">
    	<div id="h_l">
    		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/nuca_logo.gif" border="0" alt="" width="190" height="265" />
            <div id="search" class="flatart">
        		<jdoc:include type="modules" name="new_search" style="xhtml" />
            	<!-- insert rss pages, where are they?-->
            </div>
		</div>
        <div id="h_r">
        	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/slideshow_holder.jpg" alt="" />
        </div>
        <div id="menu" class="clear">
        	<jdoc:include type="modules" name="new_navigation" />
        </div>
    </div>
    <div id="main_content" class="clear">
    	<div id="left_c">
        	<div id="welcome">
            	<jdoc:include type="modules" name="new_welcome" />
            </div>
            <div id="latest_news">
            	<jdoc:include type="modules" name="new_latest_news" />
            </div>
            <div id="twitter">
            	<jdoc:include type="modules" name="new_twitter" />
            </div>
        </div>
        <div id="video">
        	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/youtube_holder.jpg" alt="" />
        </div>
        <div id="right_c">
        	<div id="open_days">
            	<jdoc:include type="modules" name="new_open_days" />
            </div>
            <div id="courses">
            	<jdoc:include type="modules" name="new_courses" />	
            </div>
            <div id="international">
            	<jdoc:include type="modules" name="new_international" />
            </div>
        </div>
    </div>
    <div id="lower_content" class="clear">
        <div id="if_logo">
            <jdoc:include type="modules" name="new_if_logo" />
        </div>
    	<div id="grey_cont">
        	<div id="social">
            	<jdoc:include type="modules" name="new_social" />
            </div>
            <div id="prospectus">
            	<jdoc:include type="modules" name="new_prospectus" />	
            </div>
            <div id="map">
            	<jdoc:include type="modules" name="new_map" />
            </div>
        </div>
        <div id="black_cont">
        	<div id="gallery_links">
            	<jdoc:include type="modules" name="new_gallery_links" />
            </div>
            <div id="gallery_image">
            	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/Gallery_image.png" alt="" />
            </div>
        </div>
    </div>
    <div id="footer" class="clear">
    	<div id="fl_left">
        	<jdoc:include type="modules" name="new_fl_left" />
        </div>
        <div id="fl_right">
        	<jdoc:include type="modules" name="new_fl_right" />
        </div>
        <div id="copyright" class="clear">
        	<jdoc:include type="modules" name="new_copyright" />
        </div>
    </div>
</div>

</body>
</html>
