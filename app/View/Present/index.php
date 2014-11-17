
<hr>
<?php foreach($Presents as $key => $Present):?>
<a href="<?php echo WEBROOT?>Presentedit/?id=<?php echo $Present['dtbPresent']['id']?>">
<?php echo $Present['dtbPresent']['id'];?>
<?php echo $Present['dtbPresent']['title'];?>
</a>
<br>

<?php endforeach;?>