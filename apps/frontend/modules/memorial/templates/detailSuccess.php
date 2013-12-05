
    <div id="content" class="jng">
    	<div class="row box">
        	<div class="titleBar">
				<?php include_partial('memorial/nav', array('memorial'=>$memorial))?>
            </div>
            <!--flash-->
            <div class="flash"></div>
            <!--/flash-->
        </div>
        <div class="row box">
        	<div class="titleBar">
            	<a class="btnWhite" href="#">纪念馆升级版</a>
                <a class="btnWhite" href="#">灵位升级版</a>
                <a class="btnWhite" href="#">墓园升级版</a>
            </div>
            <div class="cont">
                <div class="imgList">
                    <ul class="clearfix">
                    	<?php $one = $memorial->getDieNameOne();
                    		$two = $memorial->getDieNameTwo();
                    	?>
                    	<?php if(!empty($one)): ?>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $memorial->getPublicFileLocation1();?>" />
                                    <p><?php echo $one?></p>
                                </a>
                                <a class="btnPurple upgrade" href="#">升级</a>
                            </li>
                        <?php endif;?>
                    	<?php if(!empty($two)): ?>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $memorial->getPublicFileLocation2();?>" />
                                    <p><?php echo $two?></p>
                                </a>
                                <a class="btnPurple upgrade" href="#">升级</a>
                            </li>
                        <?php endif;?>
                            <li>
                                <a href="#">
                                    <img src="#" />
                                    <p>姓名</p>
                                </a>
                                <a class="btnPurple upgrade" href="#">升级</a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="#" />
                                    <p>姓名</p>
                                </a>
                                <a class="btnPurple upgrade" href="#">升级</a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="#" />
                                    <p>姓名</p>
                                </a>
                                <a class="btnPurple upgrade" href="#">升级</a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="#" />
                                    <p>姓名</p>
                                </a>
                                <a class="btnPurple upgrade" href="#">升级</a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="#" />
                                    <p>姓名</p>
                                </a>
                                <a class="btnPurple upgrade" href="##">升级</a>
                            </li>
                        </ul>
                </div>
            </div>
            
        </div>
    </div>
