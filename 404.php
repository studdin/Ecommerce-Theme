<?php 
	get_header(); 
	$keny_settings = keny_global_settings();
?>
<div class="page-404">
	<div class="content-page-404">
		<div class="title-error">
			<?php if(isset($keny_settings["title-error"]) && $keny_settings["title-error"]){
				echo esc_html($keny_settings["title-error"]);
			}else{
				echo esc_html__("404", "keny");
			}?>
		</div>
		<div class="sub-title">
			<?php if(isset($keny_settings["sub-title"]) && $keny_settings["sub-title"]){
				echo esc_html($keny_settings["sub-title"]);
			}else{
				echo esc_html__("Oops! That page can't be found.", "keny");
			}?>
		</div>
		<div class="sub-error">
			<?php if(isset($keny_settings["sub-error"]) && $keny_settings["sub-error"]){
				echo esc_html($keny_settings["sub-error"]);
			}else{
				echo esc_html__("We're really sorry but we can't seem to find the page you were looking for.", "keny");
			}?>
		</div>
		<a class="btn" href="<?php echo esc_url( home_url('/') ); ?>">
			<?php if(isset($keny_settings["btn-error"]) && $keny_settings["btn-error"]){
				echo esc_html($keny_settings["btn-error"]);}
			else{
				echo esc_html__("Back The Homepage", "keny");
			}?>
		</a>
	</div>
</div>
<?php
get_footer();