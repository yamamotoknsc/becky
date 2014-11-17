


<hr>
<?php foreach($Mailmagazines as $key => $Mailmagazine):?>
<a href="<?php echo WEBROOT?>MailmagazineEdit/?mailmagazineID=<?php echo $Mailmagazine['dtbMailmagazine']['id']?>">
<?php echo $Mailmagazine['dtbMailmagazine']['id'];?>
<?php echo $Mailmagazine['dtbMailmagazine']['title'];?>
</a>
<br>

<?php endforeach;?>