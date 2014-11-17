
<?php if(!$UserData){return;}?>

<script>
jQuery(function($){
 $('a[rel=tooltip]').tooltip();
});
</script>
<div class="page-content">
<form method="post" action="<?php echo WEBROOT?>Vote/ItemReviewConfirm" id="voteStar">
<input type="hidden" value="<?php echo $Item['Item']['id']?>" name="itemID">
<div class="row">
<div class="col-xs-12">
  <h3 class="header smaller lighter orange">
    <?php echo $Item['Item']['name'];?>
    &nbsp;&nbsp;<span class="orange small inline">現在の投票数:<?php echo $Item['Item']['vote_count'];?>&nbsp;&nbsp;</span>    
  </h3>
<h5 class="orange smaller lighter"><i class="ace-icon fa fa-pencil-square-o"></i>各項目について投票をお願いします。</h4>
<div class="well">
  <?php if($errormessages):?>
  								<div class="alert alert-block alert-danger">
  									<button type="button" class="close" data-dismiss="alert">
  										<i class="ace-icon fa fa-times"></i>
  									</button>
          					<i class="ace-icon fa fa-times"></i><?php echo $errormessages;?><br />
  								</div>
  <?php endif?>
  <?php if($UserVote):?>
                  <div class="alert alert-block alert-success align-center">
                  <p>過去の投票を編集できます。</p>
                    <button type="button" class="btn btn-warning" data-dismiss="alert">
                    編集する
                    </button>

                  </div>
  <?php endif;?>

  <?php if($UserVoteOther):?>
                  <div class="alert alert-block alert-danger align-center">
                  <p>
                  1ジャンル1サービスの投票制限のため、投票を続けると(<?php echo $UserVoteOther['Item']['name'];?>)に投票した情報は無効になります。                  
                  </p>
                    <button type="button" class="btn btn-danger" data-dismiss="alert">
                    再投票する
                    </button>

                  </div>
  <?php endif;?>

<div class="row">
  <?php foreach($votes as $key => $val):?>
    <div class="kz-m-col-vote col-xs-12">
    	<div class="col-xs-12">
    		<label class="control-label no-padding-right" for="form-field-1"><b><?php echo $GenreTitle[$key]['title']?></b></label>
        <a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[$key]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
    	</div>
    	<div class="col-xs-8 kz-star">
    			<div id="targetScore<?php echo $key?>"></div>
    	</div>
    	<div class="pull-left kz-col-clear col-xs-4">
          <input id="target-score<?php echo $key?>" type="text" class="kz-voteform" name="data[vote<?php echo $key?>]" readonly="readonly">
        </div>
      <div id="targetKeep-hint<?php echo $key?>" class="input hint1 col-xs-12"></div>
</div>
<br><br><br><br>
  <?php endforeach?>
</div>

</div>

<p>
<button class="btn btn-warning btn-block"><i class="ace-icon fa fa-pencil-square-o"></i>投票</button>
</p>

</form>



  <script>
  $.fn.raty.defaults.path = '<?php echo WEBROOT?>raty/lib/images';

  $(function() {
    $('#targetScore1').raty({
      targetScore: '#target-score1',
      target:'#targetKeep-hint1',
      half     : true,
      targetKeep:true,
      <?php if(isset($UserVote['UserVote']['vote1'])){ echo 'score:'.$UserVote['UserVote']['vote1'].',';}?>
      hints: ['不満', 'やや不満', 'ふつう', '満足', 'とても満足']
    });
    $('#targetScore2').raty({
      targetScore: '#target-score2',
      target:'#targetKeep-hint2',      
      half     : true,
      targetKeep:true,
      <?php if(isset($UserVote['UserVote']['vote2'])){ echo 'score:'.$UserVote['UserVote']['vote2'].',';}?>      
      hints: ['不満', 'やや不満', 'ふつう', '満足', 'とても満足']

    });    
    $('#targetScore3').raty({
      targetScore: '#target-score3',
      target:'#targetKeep-hint3',      
      half     : true,
      targetKeep:true,
      <?php if(isset($UserVote['UserVote']['vote3'])){ echo 'score:'.$UserVote['UserVote']['vote3'].',';}?>      
      hints: ['不満', 'やや不満', 'ふつう', '満足', 'とても満足']

    });    
    $('#targetScore4').raty({
      targetScore: '#target-score4',
      target:'#targetKeep-hint4',      
      half     : true,
      targetKeep:true,
      <?php if(isset($UserVote['UserVote']['vote4'])){ echo 'score:'.$UserVote['UserVote']['vote4'].',';}?>      
      hints: ['不満', 'やや不満', 'ふつう', '満足', 'とても満足']

    });    
    $('#targetScore5').raty({
      targetScore: '#target-score5',
      target:'#targetKeep-hint5',      
      half     : true,
      targetKeep:true,
      <?php if(isset($UserVote['UserVote']['vote5'])){ echo 'score:'.$UserVote['UserVote']['vote5'].',';}?>            
      hints: ['不満', 'やや不満', 'ふつう', '満足', 'とても満足']      
    });    

  });


  $(function() {

      $('.star').raty( {
       readOnly: true,
       space:false,
       score: function() {
          return $(this).attr('data-score');
       },
       path: '<?php echo WEBROOT?>raty/lib/images'
      });
    });

</script>

