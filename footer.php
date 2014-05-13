        <wp_footer><?php wp_footer(); ?></wp_footer>
        <footer>
            <span>Theme: BioPaul by <a href="http://www.bropaul.com/" target="_blank">BroPaul</a> adapted from <a href="http://themes.themebakers.com/biopic/" rel="nofollow" target="_blank">Biopic</a> | Powered by <a href="http://cn.wordpress.org/" rel="nofollow" target="_blank">WordPress</a><br>
			<?php
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area')) {
					if (function_exists('ot_get_option')) {
						if ($copyright_text = ot_get_option('copyright_text')) {
            				echo $copyright_text; 
						}
					}
				}
			?>
            </span>
        </footer>
	</div><!-- /wrapper -->
<a id="gotop" href="javascript:;"><i class="fa fa-arrow-circle-up"></i></a>
<?php
	if (function_exists('ot_get_option')){
		if (ot_get_option('if_ajaxify')=="on"){
			echo '<div id="loader"></div>';
		}
		if ($background_grid = ot_get_option('background_grid')) {
			if ($background_grid == "bright") {
				echo '<div id="bg_grid_gray"></div>';
			}elseif ($background_grid == "dark") {
				echo '<div id="bg_grid"></div>';
			}
		}
		if (($bgm = ot_get_option('bgm')) && !preg_match('/Mobile/', $_SERVER['HTTP_USER_AGENT'])) {
			if (preg_match('/\.js/', $bgm) ) {
				include 'includes/radio/index.php'; 
			}else{
?>
<div id="bgm"><audio src="<?php echo $bgm ?>" <?php if (ot_get_option('bgm_loop') == 'on') echo "loop"?> autoplay></audio></div>
<a title="暂停|播放" id="bgmpause" href="javascript:;"><i class="fa fa-pause"></i></a>
<a title="停止" id="bgmstop" href="javascript:;"><i class="fa fa-stop"></i></a>
<script>var bgm=$("#bgm audio"),pause=$("a#bgmpause"),stop=$("a#bgmstop"),bgmsrc=bgm.attr("src");stop.click(function(){bgm.attr("src","");pause.html('<i class="fa fa-play"></i>')});pause.click(function(){if(bgm.attr("src").length==0){bgm.attr("src",bgmsrc);$(this).html('<i class="fa fa-pause"></i>')}else{if(bgm[0].paused){bgm[0].play();$(this).html('<i class="fa fa-pause"></i>')}else{bgm[0].pause();$(this).html('<i class="fa fa-play"></i>')}}});</script>
<?php
			}
		}
		if ($tencent_analytics = ot_get_option('tencent_analytics')) {
			echo $tencent_analytics;
		}
	}
 ?>
<!-- 仅bropaul.com适用 -->
<script>
if(!/Mobile/.test(navigator.userAgent)){
	document.writeln('<audio id="paul" src="http://res.iciba.com/resource/amp3/0/0/6c/63/6c63212ab48e8401eaf6b59b95d816a9.mp3"></audio>');
}
$("#content").on("click","a[rel='author']",function(){
	alert("\u5f69\u86cb\u5df2\u7ecf\u653e\u5728\u5de6\u4e0b\u89d2\u5566~ \u8c22\u8c22\u60a8\u5bf9\u535a\u4e3b\u7684\u5173\u5fc3");
	return false;
})
</script>
</body>
</html>