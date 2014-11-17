
<div class="row">
  <div class="col-xs-12">

      <h1 class="header kz-list-title lighter sg-list-title">
        <span class="col-xs-12 col-sm-6 kz-list-title-left">
          <img src="<?php echo WEBROOT?>assets/img/genre/post.png" alt="最新記事">
          ビズラン 最新ニュース
        <a href="<?php echo DOMAIN?>/Index/feed/"><i class="ace-icon fa fa-rss-square orange"></i></a>
        </span>
      </h1>

    <div class="col-sm-8 col-xs-12">
      <?php if(count($News) > 0): ?>
          <?php foreach($News as $Item):?>
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
      <?php else:?>
    該当の記事はありませんでした。
    <?php endif;?>


  <div class="col-xs-12 col-sm-12 col-sm-offset-3 kz-pagenater">
  <ul class="pagination pagination-lg">
<?php if ($s):?>
      <li><a href="?p=<?php echo $p-1?>">&laquo;</a></li>
<?php endif;?>
  <?php foreach ($pager as $k =>$v):?>
    <?php if ($p == $v-1):?>
      <li class="active"><a href="?p=<?php echo $v-1?>"><?php echo $v;?></a></li>
    <?php else:?>
      <li><a href="?p=<?php echo $v-1?>"><?php echo $v?></a></li>
    <?php endif;?>
  <?php endforeach;?>
<?php if ($e):?>
      <li><a href="?p=<?php echo $p+1?>">&raquo;</a></li>
<?php endif;?>

  </ul>
  </div>
</div>

    <div class="col-sm-4 col-xs-12">

      <div class="col-sm-12">
          <h3 class="kz-header kz-header-point"><i class="ace-icon fa fa-list"></i>ジャンル一覧</h3>
          <form id="genre" method="get" action="<?php echo WEBROOT?>News/">
          <select class="form-control" id="selectgenre" name="genreID">
                  <option value="">全て</option>
                    <?php foreach($Lgenres as $Item):?>
                      <option value="<?php echo $Item['id']?>"><?php echo $Item['name']?></option>
                    <?php endforeach;?>
                  </select>
          <button type="submit" class="btn btn-block btn-success sg-post-btn">ジャンル絞り込み<i class="fa fa-arrow-circle-o-right"></i></button>
          </form>
      </div>



      <div class="col-sm-12 col-xs-12">
          <h3 class="kz-header kz-header-point"><i class="ace-icon fa fa-list"></i>人気記事TOP3</h3>
          <?php foreach($TopNews as $key => $Item):?>
          <div class="profile-activity clearfix">
            <div>
            <p>
                              <?php $this->Useful->newIcon(strtotime($Item['Blog']['created']))?>

              <img class="pull-left img-thumbnail kz-top-rank-img" alt="<?php echo $Item['Blog']['title']?>" src="<?php echo WEBROOT.$Item['Blog']['img']?>">
              </p>
              <img class="popular-rank" src="<?php echo WEBROOT?>assets/img/rank/rank0<?php echo $key+1?>.png" alt="<?php echo $key+1?>位">
              <a class="user" href="<?php echo WEBROOT.'List/'.$Genres[$Item['Blog']['genre_id']]['urlname'].'/blog/'.$Item['Blog']['id']?>"><?php echo $Item['Blog']['title']?></a>
              <div class="time">
                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                <?php echo date("Y/m/d H時i分",strtotime($Item['Blog']['created']))?>
              </div>
            </div>
          </div>
          <?php endforeach;?>

      </div>


    <div class="col-sm-12 col-xs-12">
          <h3 class="kz-header kz-header-point"><i class="ace-icon fa fa-list"></i>ジャンル別記事一覧</h3>
          <ul class="list-unstyled spaced">
          <?php foreach($Lgenres as $Item):?>
            <li class="muted">
          <img src="<?php echo WEBROOT?>assets/img/genre/<?php echo $Item['icon'];?>" alt="<?php echo $Item['name'];?>" width="20">
          <a href="<?php echo WEBROOT.'List/'.$Item['urlname']?>/blog/"><?php echo $Item['name']?></a>
          </li>
          <?php endforeach;?>
          </ul>
    </div>







    </div>

    </div>
</div>