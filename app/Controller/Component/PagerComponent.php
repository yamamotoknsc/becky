<?php  
App::uses('Component', 'Controller');
class PagerComponent extends Component {
    public function getPager($allcount,$p,$limit) {
		$s = $e = true;
		$pages = $allcount / $limit ;


		$pages = intval($pages+0.9);


		$pager = array();
		//ページ数が5ページ以下の場合はそのまま値を入れて返す
		if($pages < PAGERLIMIT){
			for($x=0;$x<$pages;$x++){
				$pager[$x] = $x+1;
			}
			$ret['s'] = false;
			$ret['e'] = false;
			$ret['pager'] = $pager;
			return $ret;
		}

		$pagestart = $p -2;
		$pageend = $p +2;		
		if($pagestart < 1){
			$pagestart = 1;
			$s = false;
		}


		if($pageend > $pages){
			$pagestart = $pagestart - ($pageend - $pages);
			$e = false;
		}

		for($x=0;$x<PAGERLIMIT;$x++){
			$pager[$x] = $pagestart;
			$pagestart++;
		}

		$ret['s'] = $s;
		$ret['e'] = $e;
		$ret['pager'] = $pager;

return $ret;
    }
}
?>