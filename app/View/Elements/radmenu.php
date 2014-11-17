<?php if(isset($mobile)):?>
                    <h1 class="header kz-list-title lighter sg-list-title">
                        <img src="<?php echo WEBROOT?>assets/img/genre/<?php echo $Genres[$genreID]['icon'];?>">
                      <?php echo $Genres[$genreID]['name']?><?php echo $radtitle?>
                    </h1>
                        <span class="inline">
                        <button class="btn btn-info inline <?php echo isset($mobile) ? 'kz-btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/'"><i class="ace-icon fa fa-undo"></i>戻る</button>
                        <?php if($Blogs):?><button class="btn btn-success inline <?php echo isset($mobile) ? 'kz-btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/blog/'"><i class="fa fa-list"></i> 記事一覧</button><?php endif;?>                        
                        <button class="btn btn-warning inline <?php echo isset($mobile) ? 'kz-btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/hikaku/'"><i class="ace-icon glyphicon glyphicon-align-left"></i>比較ポイント</button>
                        <button class="btn btn-danger inline <?php echo isset($mobile) ? 'kz-btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/yougo/'"><i class="ace-icon fa fa-book"></i>用語集</button>
                     </span>
<?php else:?>
                    <h1 class="header kz-list-title lighter sg-list-title">
                      <span class="col-xs-12 col-sm-5 kz-list-title-left">
                        <img src="<?php echo WEBROOT?>assets/img/genre/<?php echo $Genres[$genreID]['icon'];?>" alt="<?php echo $Genres[$genreID]['name']?>">
                      <?php echo $Genres[$genreID]['name']?><?php echo $radtitle?>
                      </span>
                        <span class="col-xs-12 col-sm-7 align-right inline">
                        <button class="btn btn-info inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/'"><i class="ace-icon fa fa-line-chart"></i>ランキング</button>
                        <?php if($Blogs):?><button class="btn btn-success inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/blog/'"><i class="fa fa-list"></i> 記事一覧</button><?php endif;?>                        
                        <button class="btn btn-warning inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/hikaku/'"><i class="ace-icon glyphicon glyphicon-align-left"></i>比較ポイント</button>
                        <button class="btn btn-danger inline <?php echo isset($mobile) ? 'btn-minier' : 'sg-rad-btn'?>" onclick="location.href='<?php echo WEBROOT?>List/<?php echo $Genres[$genreID]['urlname']?>/yougo/'"><i class="ace-icon fa fa-book"></i>用語集</button>
                      </span>
                    </h1>
<?php endif;?>