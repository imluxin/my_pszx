<div id="music-box" class="tc" style="position: absolute;top:40px; left:<?php echo $left;?>;">
	<object type="application/x-shockwave-flash" data="/music/player_mp3_multi.swf" width="200" height="200">
		<param name="movie" value="/music/player_mp3_multi.swf" />
 		<param name="FlashVars" value="mp3=/music/dbz.mp3&amp;title=云水蝉心&amp;height=200&amp;autoplay=1&amp;loop=1" />
 		<param name="wmode" value="opaque">
	</object>
</div>

<script type="text/javascript">
$(document).ready(function() {

	$('#open-music-box').click(function(){
		var z = $('#music-box object').css('z-index');

		if(z == '-1' ){
			$( "#music-box" ).css('z-index', '9999');
			$( "#music-box object" ).css('z-index', '9999');
		}else{
			$( "#music-box" ).css('z-index', '-1');
			$( "#music-box object" ).css('z-index', '-1');
		}
	});
});
</script>
