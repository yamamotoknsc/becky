<?php

App::uses('Component', 'Controller');

class NewsCComponent extends Component {

	public function mergeItems($newses,$blogs){

		$_blog = array();
		foreach($blogs as $key => $val){
			$re = array();
			$re['News'] = $val['Blog'];
			$_blog[] = $re;
		}

		//Blog オブジェクトをすべてNewsにして同じ配列に入れてしまう。
		$r = array_merge($newses,$_blog);

		//Newsオブジェクトになったすべてのオブジェクトを
		//key = modified のペアにして配列にする。
		$rr = array();
		foreach($r as $key => $val){
			$rr[$key] = $val['News']['modified'];
		}

		//modified でsort
		arsort($rr);

		//sortされたオブジェクトに情報を入れなおす。
		$ret = array();
		foreach($rr as $key => $val){
			$ret[] = $r[$key];
		}

	return $ret;

	}


}
?>