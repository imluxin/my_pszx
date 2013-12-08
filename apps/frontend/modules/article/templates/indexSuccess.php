<?php slot('title','最新动态-菩萨在线')?>
    <div id="content" class="news">
    	<div class="row clearfix">
        	<div class="main fl">
            	<div class="banner">
                	<?php include_component('adv', 'slider',array('adv'=>array(7,8,9)));?>
                </div>
            </div>
            <div class="side fr box">
            	<div class="cont">
                	<div class="bannerTip static-border mb15">
                		祭祀是对祖先的孝思和情感的缅怀，饮水不忘思源，修身齐家的一种人文科学。
                		没有哪种关系 比孝，用来更好修身齐家了。百善孝当先－－－
                	</div>
                    <div class="bannerNote mb15">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您可以建网上纪念堂,可以让逝去的名人、英烈、亲人永远被我们缅怀,让我们在线祭祀他们,
                    	同时您可以获得祭祀消费金币的10%作为回报.金币满一定数目可以提现.
                    </div>
                    <div class="userLink">
                        <ul class="clearfix">
                            <li><a class="btnGray" href="<?php echo url_for('cash/index') ?>">我要充值</a></li>
                            <li><a class="btnGray" href="<?php echo url_for('cash/index') ?>">我要提现</a></li>
                            <li><a class="btnGray" href="<?php echo url_for('buddha/index') ?>">我要拜佛</a></li>
                            <li><a class="btnGray" href="<?php echo url_for('memorial/index') ?>">我要祭祀</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box clearfix">
        	<div class="titleBar">
        		<?php foreach ($category as $one):?>
            		<a class="btnWhite" href="<?php echo url_for('article/index?category='.$one->getId()) ?>"><?php echo $one['name']?></a>
        		<?php endforeach;?>
                <a class="btnPurple buildBtn" href="<?php echo url_for('article/new')?>">我要发帖</a>
            </div>
            <div class="main fl">
            	<div class="cont">
                    <div class="pages">
                       <?php include_partial('article/pager', array('pg'=>$pg,'search_url'=>$search_url) )?>
                    </div>
                    <div class="newsList">
                        <ul>
                        <?php foreach($result as $one):?>
                        <li>
                            <h4 class="newsList_title"><a href="<?php echo url_for('article/details?id='.$one->getId()) ?>"><?php echo $one->getTitle(); ?></a></h4>
                            <p class="newsList_subtitle">
	                            <span class="newsList_author">作者：<?php echo $one->getSfGuardUser()->getUsername()?></span>
	                            <span class="newsList_time">日期：<?php echo $one->getCreatedAt()?></span>
                            </p>
                            <p class="newsList_content">
                            <?php $des = strip_tags($one->getContent(ESC_RAW)); echo substr($des, 0, 670)."..." ?>
                            </p>
                        </li>
                        <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="pages">
                       <?php include_partial('article/pager', array('pg'=>$pg,'search_url'=>$search_url) )?>
                    </div>
                </div>
            </div>
            <div class="side fr">
            	<div class="cont">
                	<h3 class="subTitle">推荐作品</h3>
                    <div class="newsList">
                    	<ul>
                    		<?php foreach ($recommend as $r):?>
							<li class="clearfix">
                            	<div class="newsList_img">
                                	<img src="<?php echo $r->getPublicFileLocation1(); ?>" />
                                </div>
                                <div class="newsList_view">
                                	<p><?php echo $r->getTitle(); ?></p>
                                </div>
                            </li>                      
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>