
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
			<h3 class="subTitle mb20">留言</h3>
	            
                <div class="">
                    <div class="clearfix mb20">
                    	<form id="m-form" action="<?php echo url_for('memorial/messageAdd?mid='.$memorial->getId());?>" method="post">
                    		<table>
                    			<tr>
                    				<td>姓名: </td>
                    				<td><input id="m-name" type="text" name="name" size="67"></td>
                    				<td></td>
                    			</tr>
                    			<tr>
                    				<td>请留言 : </td>
                    				<td><textarea id="m-content" rows="3" cols="100" name="content"></textarea></td>
                    				<td><input id="m-submit" type="submit" value="提交" class="btnPurple buildBtn" style="margin-top: 0;" /></td>
                    			</tr>
                    		</table>
                    	</form>
                    </div>
                    
                    
                    <div class="clearfix mb20">
                        
						<?php foreach ($ms as $m):?>
							<?php $d = $m['updated_at']; 
								  $date = date('Y-m-d H:i', strtotime($d));?>
							<div class="subTitle mmsg mb">
						      [<?php echo date('Y-m-d H:i:s', strtotime($m['created_at']))?>] 
						      - 
						      <?php echo $m['name']?> : <?php echo $m['content']?>
						       
						    </div>
						<?php endforeach;?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


<script type="text/javascript">
	$(document).ready(function(){
// 		$('#m-submit').click(function(){
// 			var n = $('m-name').val();
// 			var c = $('m-content').val();
// 			console.log(n);
// 			console.log(c);

// 			if(n == ''){ alert('请输入您的姓名.'); return false; }
// 			if(c == ''){ alert('请输入留言内容.'); return false; }
// 		});
		
	});
</script>