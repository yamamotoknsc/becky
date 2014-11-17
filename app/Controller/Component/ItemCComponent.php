<?php

App::uses('Component', 'Controller');

class ItemCComponent extends Component {

public function getPopularCacl($items,$limit=100){

	$pop = $items[0]['Item']['poplar'];
	$ret_item = array();
	$ret_item[] =  $items[0];
	$_ret_item[] = $items[0]['Item']['poplar'];
	array_shift($items);
	$x=0;
	foreach($items as $item){
		$x++;
		$plus = $item['Item']['vote_count'] * ($pop * 0.01) ;
		$_p = $item['Item']['poplar'] + $plus;
		$item['Item']['poplar'] = $_p;
		$ret_item[] = $item;
		$_ret_item[] = $_p;
	}


	arsort($_ret_item);

	$ite = array();
	$l=0;
	foreach($_ret_item as $key=>$val){
		$l++;
		$ite[] = $ret_item[$key];
		if($l == $limit){break;}
	}



	return $ite;

}

}
?>