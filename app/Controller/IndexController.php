<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class IndexController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('mtbSex','News');
	public $components = array('NewsC','RssC','BlogC');


	/**
	 ビズランTOP
	 */
	public function index() {

		//TOPで表示されるおすすめサービス
//		$this->set('Item',$this->Item->getItemTop());
		
		//記事一覧
		$sex = $this->mtbSex->getItems();
		$this->Set('Sex',$sex);

	}


	/**
	RSSFEED出力
	*/
	public function feed(){

		$sort =array();
		$sort['key'] = 'created';
		$sort['value'] = 'DESC';

		$topNews = $this->Blog->getItems('',$sort,INDEXNEWSLIMIT,INDEXNEWSOFFSET,'',array(BLOGTAGNEWS,BLOGTAGITEM));

		$this->layout = '';
		$entries = $this->RssC->getData(SITENAME,DOMAIN,INDEXPAGEDESCRIPTION,RSSFILENAME,$topNews,$this->Genre->getAllGenre());
//		var_dump($entries);
		$this->set('entries',$entries);

	    parent::beforeFilter();
	    $this->RequestHandler->respondAs('text/xml; charset=UTF-8');

	}

	public function ping(){
		$this->layout = '';
		$this->BlogC->sendPing();
		exit;
	}

}
