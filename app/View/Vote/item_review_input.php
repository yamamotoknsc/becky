
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

  <div class="col-xs-4 center">
    <img src="<?php echo $this->Bizran->screenshot($Item['Item']['id'],'true')?>" width="150" class="img-thumbnail kz-img-vote">
  </div>
  <div class="col-xs-8">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">

    <tr>
          <td>
            <?php echo $GenreTitle[1]['title']?>&nbsp;<a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[1]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
          </td>
          <td width="110" class="kz-col">
            <?php $this->Bizran->voteAverageStarView($Item,'vote1')?>
          </td>
    </tr>
    <tr>
          <td>
            <?php echo $GenreTitle[2]['title']?>&nbsp;<a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[2]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
          </td>

          <td width="130" class="kz-col">
            <?php $this->Bizran->voteAverageStarView($Item,'vote2')?>
          </td>
    </tr>
    <tr>
          <td>
            <?php echo $GenreTitle[3]['title']?>&nbsp;<a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[3]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
          </td>

          <td width="130" class="kz-col">
            <?php $this->Bizran->voteAverageStarView($Item,'vote3')?>
          </td>
    </tr>
    <tr>
          <td>
            <?php echo $GenreTitle[4]['title']?>&nbsp;<a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[4]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
          </td>

          <td width="130" class="kz-col">
            <?php $this->Bizran->voteAverageStarView($Item,'vote4')?>
          </td>
    </tr>
    <tr>
          <td>
          <?php echo $GenreTitle[5]['title']?>&nbsp;<a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[5]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
          </td>

          <td width="130" class="kz-col">
            <?php $this->Bizran->voteAverageStarView($Item,'vote5')?>
          </td>
    </tr>
    </table>

</div>
<h4 class="orange smaller lighter"><i class="ace-icon fa fa-pencil-square-o"></i>各項目についての投票をお願いします。</h4>
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
                  <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                    編集する
                    </button>
                  過去の投票を編集できます。
                  </div>
  <?php endif;?>

  <?php if($UserVoteOther):?>
                  <div class="alert alert-block alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                      <i class="ace-icon fa fa-times"></i>
                    </button>
                  1ジャンルに1つの投票制限のため、投票を続けると(<?php echo $UserVoteOther['Item']['name'];?>)に投票した情報は無効になります。
                  </div>
  <?php endif;?>

<div class="row">
  <?php foreach($votes as $key => $val):?>
    	<div class="col-xs-6 kz-vote-star">
    		<label class="control-label no-padding-right" for="form-field-1"><?php echo $GenreTitle[$key]['title']?></label>
        <a href="#" rel="tooltip" data-toggle="tooltip" title="<?php echo $GenreTitle[$key]['comment']?>"><i class="ace-icon glyphicon glyphicon-question-sign"></i></a>
    	</div>
    	<div class="col-xs-3 kz-star">
    			<div id="targetScore<?php echo $key?>"></div>
    	</div>
    	<div class="col-xs-1 pull-left kz-col-clear">
          <input id="target-score<?php echo $key?>" type="text" class="kz-voteform" name="data[vote<?php echo $key?>]" readonly="readonly">
        </div>
      <div class="col-xs-2 input hint1 align-left kz-vote-hint" id="targetKeep-hint<?php echo $key?>" ></div>
  <?php endforeach?>

</div></div>

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

