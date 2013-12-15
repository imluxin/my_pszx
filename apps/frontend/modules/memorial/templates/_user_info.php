<div class="cont">
<h3 class="subTitle">用户信息</h3>
<div class="userInfo">
<p>昵称：<?php echo $myuser->getUsername()?></p>
<p>礼佛ID：1682783387</p>
<p>金币：<?php echo $myuser->getCoins() ?>个（等价<?php echo ($myuser->getCoins()/100) ?>元）</p>
</div>
<div class="note">
<p>温馨提示:</p>
<p>头像图片大小为155*180。</p>
</div>
</div>