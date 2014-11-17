<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<?php echo $this->Html->charset(); ?>


<a href="<?php echo WEBROOT?>Customer/">ユーザー管理</a>
<a href="<?php echo WEBROOT?>Contract/">会期管理</a>
<a href="<?php echo WEBROOT?>Contract/update">会期更新管理</a>
<a href="<?php echo WEBROOT?>MailMagazine/">メルマガ管理</a>
<a href="<?php echo WEBROOT?>Present/">私物プレゼント管理</a>

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
        	<?php echo $this->element('sql_dump'); ?>



	</body>
</html>

