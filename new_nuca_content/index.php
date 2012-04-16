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

$headData=$this->getHeadData();
reset($headData['scripts']);

foreach($headData['scripts'] as $key=>$value)
{
    unset($headData['scripts'][$key]);
}

$this->setHeadData($headData);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" media="all" rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/reset.css?v6" />
    <link type="text/css" media="screen" rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/styles.css?v6" />
    <link type="text/css" media="print" rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/styles-print.css?v6" />
    <link type="text/css" media="all" rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/sifr.css?v6" />
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $this->baseurl; ?>templates/system/css/styles-ie7.css?v6" type="text/css" /><![endif]-->
    <!--[if lte IE 6]><link rel="stylesheet" href="<?php echo $this->baseurl; ?>templates/system/css/styles-ie6.css?v6" type="text/css" /><![endif]-->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/system/js/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/system/js/jquery.cookie.js"></script>  
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/system/js/thickbox.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/system/js/main.js?v1"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/system/js/coursemenu.js"></script>

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/template.css" type="text/css" />
<jdoc:include type="head" />
</head>
<body id="page_bg">

<div id="container">
	<div id="header">
    	<div id="h_l">
    		<a href="/" title="home">
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/nuca_logo_sh.gif" border="0" alt="" /></a>
            <div id="search">
        		<jdoc:include type="modules" name="new_search" style="xhtml" />
            	<!-- insert rss pages, where are they?-->
            </div>
		</div>
        <div id="h_r">
            <?php if ($this->countModules('new_slideshow')){ ?>
                <jdoc:include type="modules" name="new_slideshow" />
            <?php } elseif ($this->countModules('new_static_image')){?>
                <jdoc:include type="modules" name="new_static_image" />
            <?php } else { ?>
        	   <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/slideshow_holder.jpg" alt="" />
            <?php } ?>
        </div>
        <div id="menu" class="clear">
        	<jdoc:include type="modules" name="new_navigation" />
        </div>
    </div>
    <div id="main_content" class="clear">
        <?php if ($this->countModules('new_main_extra')) {
            ?>
        <div class="main_narrow">
            <?php if ($this->countModules('new_main_content')): ?>
                <jdoc:include type="modules" name="new_main_content" />
            <?php endif; ?>
            <?php if ($this->countModules('new_latest_news')): ?>
                <jdoc:include type="modules" name="new_latest_news" />
            <?php endif; ?>
            <jdoc:include type="component" />
        </div>  
        <div class="main_side">
            <jdoc:include type="modules" name="new_main_extra" />
        </div>  
            <?php
        } else {
            ?>
        <div class="main_wide">
            <?php if ($this->countModules('new_main_content')): ?>
                <jdoc:include type="modules" name="new_main_content" />
            <?php endif; ?>
            <?php if ($this->countModules('new_latest_news')): ?>
                <jdoc:include type="modules" name="new_latest_news" />
            <?php endif; ?>
            <jdoc:include type="component" />
        </div>
            <?php
        }
        ?>
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
        <a href="thegallery/">
            <div id="black_cont">
                <div id="gallery_links">
                    <jdoc:include type="modules" name="new_gallery_links" />
                </div>
                <div id="gallery_image">
                    <jdoc:include type="modules" name="new_gallery_image" />
                </div>
            </div>
        </a>
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
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-7039185-4");
        pageTracker._trackPageview();
        }
    catch(err) {}
</script>


</body>
</html>
