<!-- <audio controls autoplay="autoplay" loop="loop" style="display: none;"> -->
<!--   <source src="/music/dbz22.mp3" type="audio/mpeg" /> -->
<!--   <source src="horse.ogg" type="audio/ogg" /> -->
<!--   <embed height="50" width="100" src="/music/dbz22.mp3" /> -->
<!-- </audio> -->

<div id="music-box" class="tc" style="position: absolute;top:40px; left:<?php echo $left;?>;">
	<object type="application/x-shockwave-flash" data="/music/player_mp3_multi.swf" width="200" height="200">
		<param name="movie" value="/music/player_mp3_multi.swf" />
 		<param name="FlashVars" value="mp3=/music/dbz.mp3|/music/般若波罗密多心经.mp3|/music/灵山梵音.mp3|/music/禅院钟声.mp3&amp;title=云水蝉心|般若波罗密多心经|灵山梵音|禅院钟声&amp;height=200&amp;autoplay=1&amp;loop=1" />
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