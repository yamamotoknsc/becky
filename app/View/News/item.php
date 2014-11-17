
                <div class="row">
                  <div class="col-xs-12">
<?php if(isset($mobile)):?>
                    <h1 class="header kz-list-title lighter sg-list-title">
                        <img src="<?php echo WEBROOT?>assets/img/genre/<?php echo $Genres[$genreID]['icon'];?>">
                      <?php echo $Genres[$genreID]['name']?>
                    </h1>
                        <span class="inline">
                        <button class="btn btn-info inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/'"><i class="ace-icon fa fa-undo"></i>戻る</button>
                        <?php if($Blogs):?><button class="btn btn-success inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/blog/'"><i class="fa fa-list"></i> 記事一覧</button><?php endif;?>                        
                        <button class="btn btn-warning inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/hikaku/'"><i class="ace-icon glyphicon glyphicon-align-left"></i>比較ポイント</button>
                        <button class="btn btn-danger inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/yougo/'"><i class="ace-icon fa fa-book"></i>用語集</button>
                     </span>
<?php else:?>
                    <h1 class="header kz-list-title lighter sg-list-title">
                      <span class="col-xs-12 col-lg-6 kz-list-title-left">
                        <img src="<?php echo WEBROOT?>assets/img/genre/<?php echo $Genres[$genreID]['icon'];?>">
                      <?php echo $Genres[$genreID]['name']?> 
                      </span>
                        <span class="col-xs-12 col-lg-6 align-right inline">
                        <a href="<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>"><button class="btn btn-info inline sg-rad-btn"><i class="ace-icon fa fa-undo"></i>戻る</button></a>            
                        <a href="<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/blog/"><button class="btn btn-success inline sg-rad-btn"><i class="fa fa-list"></i> 記事一覧</button></a>
                        <a href="<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/hikaku/"><button class="btn btn-warning inline sg-rad-btn"><i class="ace-icon glyphicon glyphicon-align-left"></i>比較ポイント</button></a>
                        <a href="<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/yougo/"><button class="btn btn-danger inline sg-rad-btn"><i class="ace-icon fa fa-book"></i>用語集</button></a>
                      </span>
                    </h1>
<?php endif;?>
                          <div class="col-sm-12">
<h2>
<?php echo $Item['Blog']['title']?>
</h2>
(<?php echo  date("Y/m/d H:i",strtotime($Item['Blog']['created']));?>)
<hr>
<p>
<?php echo $Item['Blog']['catchcopy']?>
<?php echo $Item['Blog']['comment']?>
</p>
                           </div>

                          <div class="col-sm-12 spacer30">
                                                    <h3 class="header smaller lighter blue"><i class="ace-icon fa fa-comment"></i>記事一覧</h3>

                              <?php foreach($Blogs as $Item):?>
                              <div class="profile-activity clearfix">
                                <div>
                <img class="pull-left img-thumbnail" alt="<?php echo $Item['Blog']['title']?>" src="<?php echo WEBROOT.'img/blog/'.$Item['Blog']['img']?>">
                                  <a class="user" href="<?php echo WEBROOT.'List/'.$urlname.'/blog/'.$Item['Blog']['id']?>"><?php echo $Item['Blog']['title']?></a>
                                  <div class="time">
                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                    <?php echo $Item['Blog']['created']?>
                                  </div>
                                </div>
                              </div>
                              <?php endforeach;?>
                           </div>

</div>
</div>