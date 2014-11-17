


<hr>
<?php foreach($Customers as $key => $Customer):?>
<a href="<?php echo WEBROOT?>Customeredit/?customerID=<?php echo $Customer['dtbCustomer']['customer_id']?>">
<?php echo $Customer['dtbCustomer']['name01'];?>
</a>
<br>

<?php endforeach;?>