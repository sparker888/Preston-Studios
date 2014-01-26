<?php
// $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 Leo Exp $
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  
  	<script src="<?php print base_path().path_to_theme() ?>/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="<?php print base_path().path_to_theme() ?>/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php print base_path().path_to_theme() ?>/js/Swis721_Cn_BT_700.font.js" type="text/javascript"></script>
<script src="<?php print base_path().path_to_theme() ?>/js/cufon-replace.js" type="text/javascript"></script>
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
  
<body id="body">
	<div class="min-width">
        <div id="main">
            <div id="header">
                <div class="head-row1">
                    <div class="col1">
                    	<?php if ($breadcrumb != ""): ?>
					<?php // print $breadcrumb ?>
                        <?php endif; ?>
                  	</div>
                    <div class="col2">
                    	<div class="search-box">
							<?php if ($search_box): print $search_box;  endif; ?>
                        </div>
                    </div>
                </div>
<?php if(drupal_is_front_page()) :  ?>
<div class="myImage">
	<img src="<?php print base_path(); print path_to_theme(); ?>/images/2525.jpg">
</div>
<?php endif; ?>
		<?php if(drupal_is_front_page()) {  ?>
                <div class="head-row2">
		<?php } else { ?>
                <div class="head-row2A">
		<?php } ?>
		<div class="col1">
		<?php if ($logo) : ?>
                            <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" class="logo" /></a>
                        <?php endif; ?>
                        <?php if ($site_name) : ?>
                            <h1 class="site-name"><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
                        <?php endif; ?>
                        <?php if ($site_slogan) : ?>
                            <div class="slogan"><?php print($site_slogan) ?></div>
                        <?php endif;?>
                        <?php if ($mission != ""): ?>
                            <div id="mission"><?php print $mission ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col2">
                        <?php if (isset($primary_links)) : ?>
                            <div class="pr-menu">
                                <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
		<?php if(drupal_is_front_page()) : ?>
                <div class="head-row3">
                	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
                        width="968" height="360">
                        <param name="movie" value="<?php print base_path().path_to_theme() ?>/flash/header_v8.swf" />
                        <param name="quality" value="high" />
                        <param name="menu" value="false" />
                        <!--[if !IE]> <-->
                        <object data="<?php print base_path().path_to_theme() ?>/flash/header_v8.swf"
                            width="968" height="360" type="application/x-shockwave-flash">
                            <param name="quality" value="high" />
                            <param name="menu" value="false" />
                            <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
                            FAIL (the browser should render some flash content, not this).
                        </object>
                        <!--> <![endif]-->
                    </object>
              	</div>
		<?php endif; ?>
            </div>
            
            <div id="cont">
            	<div class="cont-inner png">
					<?php if ($left != ""): ?>
                        <div id="left-col">
                      		<div class="ind">
                                <div class="width">
                                    <?php print $left?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($right != ""): ?>
                        <div id="right-col">
                            <div class="ind">
                                <div class="width">	
                                    <?php print $right?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div id="cont-col">
                        <div class="ind">
                        	
                            <?php if ($is_front && $custom != ""): ?>
                                <div id="custom">
                                    <div class="ind">
										<?php print $custom?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
<?php if(($_GET['q'] == "node/61") || ($_GET['q'] == "node/74") || ($_GET['q'] == "node/76") || ($_GET['q'] == "node/75") || ($_GET['q'] == "node/75") || ($_GET['q'] == "node/62") || ($_GET['q'] == "node/77")) { } else {
 print '<h2'. ($tabs ? ' class="with-tabs title"' : '') .'>'. $title .'</h2>'; }?>
                            <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                            <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                                             
                            <?php if ($show_messages && $messages != ""): ?>
                                <?php // print $messages ?>
                            <?php endif; ?>
                        
                            <?php if ($help != ""): ?>
                                <div id="help"><?php print $help ?></div>
                            <?php endif; ?>
                        
                              <!-- start main content -->
                            <?php print $content; ?>
			    <?php print $main_section; ?> 	
                      	</div>
                    </div>
                    
              </div>
            </div>
            
  		</div>
        <div id="footer">
	    <div class="footerone">
	    </div>				
            <div class="foot">
		<img src="<?php print base_path(); print path_to_theme(); ?>/images/footerborder.gif">
		<div class="footText">
                <?php if ($footer_message || $footer) : ?>
                    <span><?php print $footer_message;?>&nbsp;<!--{%FOOTER_LINK} --></span>
                <?php endif; ?>
		</div>
            </div>
	    <div class="footerthird">
	    </div>		
        </div>
        <!-- coded by Leo -->
    </div>
<?php print $closure;?>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
