
<?php if(isset($mobile)):?>
<h3 class="header smaller lighter orange">
<?php echo $Item['Item']['name'];?>
</h3>
<div class="col-xs-12 orange">現在の投票数:<?php echo $Item['Item']['vote_count'];?></div>
<?php else:?>
<h3 class="header smaller lighter orange">
<span class="col-sm-7"><?php echo $Item['Item']['name'];?></span>
<span class="col-sm-5"><label class="pull-right">現在の投票数:<?php echo $Item['Item']['vote_count'];?></label></span>
</h3>

<?php endif;?>

<div class="col-xs-12 well spacer50">
	<div class="spacer20">
	  <h4 class="orange smaller lighter align-center">投票ありがとうございました。</h4>
	</div>
</div>
<div class="col-xs-12 spacer40">
<p class="spacer60">
<button class="btn btn-grey btn-block" onClick="window.parent.closeModal()">閉じる</button>
</p>
</div>