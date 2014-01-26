<div id="node-<?php print $node->nid; ?>"class="<?php print $classes; ?>" >
	<div class="node-inner" id="productPage">
		<div class="content <?php if(!$teaser): print "no_bg"; endif;?>" id="carAll">
			<?php if(!$teaser):?>
		</div>
	 	<div class="bg_content">
	             <div class="car_ctnr">
	                <p><?php print $node->content["body"]["#value"];?></p>
	             </div>
			<br />
			<?php
				if (arg(0) == 'node' && is_numeric(arg(1))) : 
	                        $args[0] = arg(1);
	                        print views_embed_view("image_thumb_block","default",arg(1));
	                        endif;
	                ?>
		</div>
	        <div class="clear"></div>
	</div>
	<div class="extra-links"><?php print $links; ?></div>
	<?php endif;?>
</div>
