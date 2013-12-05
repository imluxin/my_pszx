<?php slot('title','帖子-菩萨在线')?>
 <div id="content" class="build news">
    	<div class="row box clearfix">
        	<div class="side fr">
            	<div class="cont">
            		<?php $author = $article->getSfGuardUser()?>
                	<div class="authorInfo clearfix mb20">
                        <div class="authorPhoto">
                            <?php echo image_tag('../uploads/userphoto/'.$myuser->getPhoto(),array('class'=>'userIntro_photo')) ?>
                        </div>
                        <div class="authorLink">
                            <h4 class="authorLink_name"><?php echo $article->getUserName()?></h4>
                            <a class="btnPurple" href="#">我的空间</a>
                            <a class="btnPurple" href="#">给我留言</a>
                        </div>
                    </div>
                    <div class="otherWriting">
                    	<h3 class="subTitle">其他作品</h3>
                        <div class="txtList">
                        	<ul>
                        		<?php foreach($all as $a): ?>
                            	<li>
                                	<a href="<?php echo url_for('article/details?id='.$a->getId()) ?>"><?php echo $a['title']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main fl">
            	<div class="cont">
                	<div class="writing">
                        <h4 class="writingTitle"><?php echo $article->getTitle(); ?></h4>
                        <p class="writingSubtitle">
                            <span class="writingSubtitle_author">作者：<?php echo $article->getSfGuardUser()->getUsername() ?></span>
                            <span class="writingSubtitle_time">日期：<?php echo $article->getCreatedAt() ?></span>
                        </p>
                        <!--帖子内容-->
                        <div class="writingCont">
                           <?php echo $article->getRaw('content') ?>
                        </div>
                        <!--帖子内容-->
                    </div>
                    <div class="reply">
                        <h3 class="subTitle">我要回帖</h3>
                        <p class="clearfix">
                            <?php include_partial('article/reply', array('form'=>$form,'id'=>$id )) ?>
                        </p>
                    </div>
                    <div class="replies">
                    	<h3 class="subTitle">回帖内容</h3>
                    	<div class="txtList">
                    		<ul>
                    			<?php foreach($comments as $one): ?>
                    				<li><?php echo $one->getContent() ?></li>
                    			<?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>