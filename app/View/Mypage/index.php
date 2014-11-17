



写真：<br />
<img src="https://graph.facebook.com/<?php echo $UserData['id']; ?>/picture?type=large"><br />
<br />
名前：<br />
<?php echo $UserData['name']; ?><br />
<br />
リンク：<br />
<?php echo $UserData['link']; ?><br />
<br />
誕生日：<br />
<?php echo $UserData['birthday']; ?><br />
<br />
性別：<br />
<?php echo $UserData['gender']; ?><br />
<br />
メール：<br />
<?php echo $UserData['email']; ?><br />
<br />
場所：<br />
<?php echo $UserData['locale']; ?><br />

<h2>自分が投票したもの一覧</h2>

<?php foreach($HistoryItems as $key => $value):?>
	<a href="<?php echo WEBROOT?>mypage/deleteVote/?itemID=<?php echo $value['UserVote']['id']?>">削除</a>
	<?php echo $value['Item']['name']?><br>

<?php endforeach;?>
