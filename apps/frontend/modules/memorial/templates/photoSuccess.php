
    <div id="content" class="jng">
    	<div class="row box">
        	<div class="titleBar">
				<?php include_partial('memorial/nav', array('id'=>$memorial->getId()))?>
            </div>
            
            <div class="cont">
			<h3 class="subTitle mb20">照片</h3>
	            
                <div class="imgList">
                    <ul class="clearfix">
                        <li>
							<a href="<?php echo url_for('memorial/detail?id='.$memorial['id']) ?>"> 
								<?php echo image_tag('../uploads/memorial/'.$memorial['die_photo_one']) ?>
								<p><?php echo $memorial['die_name_one'] ?></p>
							</a>
						</li>
						<?php if (!empty($memorial['die_name_two'])): ?>
                        <li>
							<a href="<?php echo url_for('memorial/detail?id='.$memorial['id']) ?>"> 
								<?php echo image_tag('../uploads/memorial/'.$memorial['die_photo_two']) ?>
								<p><?php echo $memorial['die_name_two'] ?></p>
							</a>
						</li>
						<?php endif;?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
