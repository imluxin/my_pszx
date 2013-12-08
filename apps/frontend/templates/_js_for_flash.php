<script type="text/javascript">

	function getUid() {
		return '<?php if($myuser) echo $myuser->getId(); else echo 0; ?>';
	}

	function getSid() {
		return '1';
	}

	function getDragRectangle(){
		return [ 200, 400, 600, 200 ];
	}

	function getEffectInfo(){
		return ['<?php echo lx::getShe(); ?>', 100, 250, 15000, 380, 380 ];
	}

	
    // For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. 
    var swfVersionStr = "11.6.0";
    // To use express install, set to playerProductInstall.swf, otherwise the empty string. 
    var xiSwfUrlStr = "/flash/playerProductInstall.swf";
    var flashvars = {};
    var params = {};
    params.quality = "high";
    params.bgcolor = "#ffffff";
    params.allowscriptaccess = "sameDomain";
    params.allowfullscreen = "true";
    params.wmode = "opaque";
    var attributes = {};
    attributes.id = "FO";
    attributes.name = "FO";
    attributes.align = "middle";
    swfobject.embedSWF(
        '<?php echo lx::getFOswf(); ?>', "flashContent", 
        "100%", "670", 
        swfVersionStr, xiSwfUrlStr, 
        flashvars, params, attributes);
    // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
    swfobject.createCSS("#flashContent", "display:block;text-align:left;");
</script>