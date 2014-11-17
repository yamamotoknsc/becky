                <div class="row">
                  <div class="col-xs-12">
                  <?php echo $this->element('radmenu');?>
<div class="spacer30">
                                <?php foreach($Items as $Item):?>

                                  <h2 class="kz-header kz-header-point"><i class="ace-icon fa fa-pencil-square-o"></i><?php echo $Item['Yougo']['title'];?>
                                  <?php echo $this->Useful->CheckAdminID($UserData['id']) ? '['.$Item['Yougo']['id'].']':'';?>
                                  </h2>
                                  <p>
                                  <?php echo nl2br($Item['Yougo']['comment']);?>
                                  </p>
                                <?php endforeach;?>

          <div class="well well-sm spacer30"> お問い合わせはこちらよりお問い合わせください&nbsp;
            <i class="ace-icon fa fa-hand-o-right blue"></i>
            <a href="<?php echo WEBROOT?>contact/">お問い合わせフォームへ</a><br>
          </div>
</div>
</div>
</div>