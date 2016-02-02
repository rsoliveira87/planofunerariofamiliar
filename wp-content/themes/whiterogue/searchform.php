<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="searchleft">
		<input type="text" value="" name="s" id="searchbox" class="searchinput"/>
	</div>
    <div class="searchright">
    	<input type="submit"
               class="submitbutton"
               style="background: <?php echo esc_attr(get_theme_mod('_button_color_scheme','#cc0021')); ?> !important"
               value="<?php echo 'Buscar'; ?>" />
    </div>
    <div class="clearfix"></div>
</form>

