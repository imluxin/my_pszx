<?php slot('title', '祭品商店-菩萨在线' ) ?>
    <div id="content" class="shop">
    	<div class="row clearfix">
        	<div class="main fl">
            	<div class="banner">
                	<?php include_component('adv', 'slider',array('adv'=>array(13,14,15)));?>
                </div>
            </div>
            <div class="side fr box">
            	<div class="cont">
                	<div class="bannerTip static-border mb20">
					祭祀是对祖先的孝思和情感的缅怀，饮水不忘思源，修身齐家的一种人文科学。没有哪种关系 比孝，用来更好修身齐家了。百善孝当先－－－
					
					</div>
					<div class="bannerNote mb20">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建网上祭品,让逝去的亲人也分享美好的生活,在天堂也一样享受各种生活用品,也是我们最好的纪念,当别人祭祀消费,您也能获得10%的金币提成.
					</div>
					<a class="buildBtn btnPurple" href="<?php echo url_for('oblation/new') ?>">创建祭品</a>
                </div>
            </div>
        </div>
        <div class="row box">
        	<div class="shopSort">
        		<?php foreach ($category as $one):?>
            		<a href="<?php echo url_for('oblation/index?category='.$one->getId()) ?>"><?php echo $one['name'] ?></a>
            	<?php endforeach;?>
            </div>
        	<div class="titleBar">
            	<a class="btnWhite" href="<?php echo url_for('oblation/index?xl=yes'.urldecode($search_url))?>">销量最多</a>
                <a class="btnWhite" href="<?php echo url_for('oblation/index?zd=yes'.urldecode($search_url)) ?>">价格最低</a>
                <a class="btnWhite" href="<?php echo url_for('oblation/index?zc=yes'.urldecode($search_url))?>">期限最长</a>
                <a class="btnWhite" href="<?php echo url_for('oblation/index?last=yes'.urldecode($search_url))?>">最新创建</a>
                <div class="search fr">
                	<form action="<?php echo url_for('oblation/index')?>" method="get">
	                    <input name="name" value="<?php echo $name ?>" type="text" />
	                    <input class="btnPurple" type="submit" value="搜索">
                    </form>
                </div>
            </div>
            <div class="cont">
                <div class="pages">
                	<?php include_partial('oblation/pager', array('pg'=>$pg,'search_url'=>$search_url))?>
                </div>
            	<div class="shopList">
                        <ul class="clearfix fix-w120-h120">
                        <?php foreach($result as $one):?>
                            <li>
                            	<div class="shopList_img">
                                	<?php echo image_tag($one->getPicture(true)) ?>
                                </div>
                                <div class="shopList_info">
                                	<p>名称：<?php echo $one['name']?></p>
                                	<p>价格：<?php echo $one['price']?>金币</p>
                                	<p>时间：<?php echo $one['times']?>天</p>
                                	<p><a class="btnPurple" href="<?php echo url_for('buddha/index')?>">购买</a></p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <div class="pages">
                	<?php include_partial('oblation/pager', array('pg'=>$pg,'search_url'=>$search_url))?>
                </div>
            </div>
        </div>
    </div>