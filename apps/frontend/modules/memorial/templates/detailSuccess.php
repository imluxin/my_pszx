
    <div id="content" class="jng">
    	<div class="row box">
        	<div class="titleBar">
				<?php include_partial('memorial/nav', array('id'=>$memorial->getId()))?>
            </div>
            <!--flash-->
            <div class="flash"></div>
            <!--/flash-->
        </div>
        <div class="row box">
            <div class="cont">
            	<div class="pr">
            		<div id="die-name-in-pic">
            			<span><?php echo $memorial['die_name_one'].' '.$memorial['die_name_two'].' 之墓'?></span>
            		</div>
            		<img class="w" alt="" src="<?php echo $memorial->getMemorialTemplate()->getPicture('jng_path', true);?>">
            	</div>
            	
	        	<div class="titleBar mb15">
	        		<?php $mid = $sf_request->getParameter('id')?>
	            	<a class="btnWhite" href="<?php echo url_for('memorial/detail?id='.$mid.'&show=jng')?>">纪念馆升级版</a>
	                <a class="btnWhite" href="<?php echo url_for('memorial/detail?id='.$mid.'&show=lw')?>">灵位升级版</a>
	                <a class="btnWhite" href="<?php echo url_for('memorial/detail?id='.$mid.'&show=gm')?>">墓园升级版</a>
	            </div>
	            
                <div class="imgList">
                    <ul class="clearfix fix-w320-h179">
                    	<?php $show = $sf_request->getParameter('show', 'jng');?>
                    	<?php
                    		if ($myuser) {
                    			$uid = $myuser->getId();
                    		}else{
								$uid = '0';
							}
                    		
                    		$m_uid = $memorial->getUserId();
                    		$m_tid = $memorial->getTemplateId();
                    	?>
                    	<?php foreach ($t_list as $t):?>
                            <li>
                                <img src="<?php echo $t->getPicture($show.'_path', true);?>" />
                                <p class="tc"><?php echo $t->getNameWithPrice();?></p>
                                <?php if($uid == $m_uid && $m_tid != $t['id']):?>
	                                <?php echo jq_link_to_remote('升级', 
												array(
													'url' => url_for('memorial_upgrade', array('mid'=>$mid, 'tid'=>$t->getId())),
													'confirm' => '确定要花费'.$t->getPrice().'金币升级此纪念馆吗？',
													'success' => 'if(data == 1) { location.reload() } else { alert(data); }'
												), array('class' => 'btnPurple upgrade'))?>
                                <?php endif;?>
                                <?php if($uid == $m_uid && $m_tid == $t['id']):?>
                                	<a class="btnGray upgrade" href="#">已升级</a>
                                <?php endif;?>
                                
                                
                            </li>
                    	<?php endforeach;?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
