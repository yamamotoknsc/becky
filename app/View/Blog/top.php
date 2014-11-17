
                <div class="row">
                  <div class="col-xs-12">
                  <?php echo $this->element('radmenu');?>                  


    <div class="col-sm-8">

        <?php foreach($Blogs as $Item):?>
              <div class="profile-activity clearfix">
              <div class="sg-centering">
              <p>    
                  <?php $this->Useful->newIcon(strtotime($Item['Blog']['created']))?>
                <?php if($Item['Blog']['img']):?>
                  <img class="pull-left img-thumbnail kz-top-img" alt="<?php echo $Item['Blog']['title']?>" src="<?php echo WEBROOT.$Item['Blog']['img'];?>">                              
                <?php else:?>
                  <img class="pull-left img-thumbnail kz-top-img" alt="<?php echo $Item['Blog']['title']?>" src="<?php echo WEBROOT.'assets/img/genre/'.$Genres[$Item['Blog']['genre_id']]['icon']?>">
                <?php endif;?>
                </p>
                <p>
                <?php if (isset($Item['Blog']['link'])):?>
                      <a class="user" href="<?php echo WEBROOT.'List/'.$Genres[$Item['Blog']['genre_id']]['urlname']?>"><?php echo $Item['Blog']['title']?></a>
                <?php else:?>
                      <a class="user" href="<?php echo WEBROOT.'List/'.$Genres[$Item['Blog']['genre_id']]['urlname'].'/blog/'.$Item['Blog']['id']?>"><?php echo $Item['Blog']['title']?></a>
                <?php endif;?>
                <br />
                  <span class="label btn-info arrowed-right arrowed-in kz-top-label">
                  <a href="<?php echo WEBROOT?>List/<?php echo $Genres[$Item['Blog']['genre_id']]['urlname']?>">
                  <?php echo $Genres[$Item['Blog']['genre_id']]['name'];?>
                  </a>
                  </span>
                  <?php $this->Bizran->newsIcon($Item,$Genres);?>
                  <i class="ace-icon fa fa-clock-o bigger-110"></i>
                  <?php echo  date("Y/m/d H時i分",strtotime($Item['Blog']['created']));?>
                </p>
              </div>
              </div>
        <?php endforeach;?>
    </div>


    <div class="col-sm-4">

                          <div class="col-sm-12 col-xs-12">
                              <h2 class="kz-header kz-header-point"><i class="ace-icon fa fa-line-chart"></i><?php echo $Genres[$genreID]['name']?>TOP３</h2>
                              <?php foreach($Items as $key =>$value):?>
                              <div class='col-xs-12 kz-blog-invite-list'>
                                <div class="col-sm-3 col-xs-4 kz-col-clear"><img class="side-rank-tag" src="<?php echo WEBROOT?>assets/img/rank/rank0<?php echo $key+1?>.png" alt="<?php echo $key+1?>位">
                                  <a href="<?php echo WEBROOT.'Item/?itemID='.$value['Item']['id'];?>" target="item<?php echo $value['Item']['id']?>">
                                  <img src="<?php echo $this->Bizran->screenshot($value['Item']['id'])?>" width="90" class="img-responsive img-thumbnail" alt="<?php echo $value['Item']['name'];?>"></a>
                                </div>

                              <div class="col-sm-9 col-xs-8 kz-col-r">
                                <div class="col-xs-12 kz-col-r">
                                  <a href="<?php echo WEBROOT.'Item/?itemID='.$value['Item']['id'];?>" target="item<?php echo $value['Item']['id']?>">
                                  <?php echo $value['Item']['name'];?>
                                  </a>
                                  <?php echo $this->Useful->CheckAdminID($UserData['id'])&& $value['Item']['affiliate'] ? '【'.$value['Item']['affiliate'].'】':'';?>
                                   <div class="kz-list-copy"><?php echo $value['Item']['title']?></div>
                                </div>
                              </div>
                            </div>
                            <?php endforeach;?>
                          </div>


    <div class="col-sm-12 col-xs-12">
          <h2 class="kz-header kz-header-point"><i class="ace-icon fa fa-list"></i>
          ジャンル別記事一覧</h2>
          <ul class="list-unstyled spaced">
          <?php foreach($Lgenres as $Item):?>
            <li class="muted">
          <img src="<?php echo WEBROOT?>assets/img/genre/<?php echo $Item['icon'];?>" alt="<?php echo $Item['name'];?>" width="20px">
          <a href="<?php echo WEBROOT.'List/'.$Item['urlname']?>/blog/"><?php echo $Item['name']?></a>
          </li>
          <?php endforeach;?>

          </ul>
          <button onclick="location.href='<?php echo WEBROOT?>News/'" class="btn btn-block btn-success sg-post-btn">記事一覧をみる <i class="fa fa-arrow-circle-o-right"></i></button>
    </div>
</div>

</div>

</div>