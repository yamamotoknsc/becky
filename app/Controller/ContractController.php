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
class ContractController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('dtbCustomer','dtbContract');

	/**
	itemをお気に入り登録
	**/
	public function index() {

//		$search = isset($this->params['url']['search']) ? $this->params['url']['search'] : DEFAULTGENRE;
		$sort = isset($this->params['url']['sort']) ? $this->params['url']['sort'] : DEFUALTSORT;
		$limit = isset($this->params['url']['limit']) ? $this->params['url']['limit'] : PAGELIMIT;
		$offset = isset($this->params['url']['offset']) ? $this->params['url']['offset'] : PAGEOFFSET;

		//記事一覧
		$sort =array();
		$sort['key'] = 'customer_id';
		$sort['value'] = 'DESC';

		$customers = $this->dtbCustomer->getItems($search,$sort,$limit,$offset);

		$this->Set('Customers',$customers);

	}

	/**
	itemをお気に入り登録
	**/
	public function update() {

//		$search = isset($this->params['url']['search']) ? $this->params['url']['search'] : DEFAULTGENRE;
		$sort = isset($this->params['url']['sort']) ? $this->params['url']['sort'] : DEFUALTSORT;
		$limit = isset($this->params['url']['limit']) ? $this->params['url']['limit'] : PAGELIMIT;
		$offset = isset($this->params['url']['offset']) ? $this->params['url']['offset'] : PAGEOFFSET;

		//記事一覧
		$sort =array();
		$sort['key'] = 'customer_id';
		$sort['value'] = 'DESC';

		$customers = $this->dtbCustomer->getItems($search,$sort,$limit,$offset);

		$this->Set('Customers',$customers);

	}


	public function csvImport(){

		$offset = isset($this->params['url']['offset']) ? $this->params['url']['offset'] : PAGEOFFSET;

		$this->index();

	}

	public function csvExport(){

		$offset = isset($this->params['url']['offset']) ? $this->params['url']['offset'] : PAGEOFFSET;


	}


	public function mailsend(){

		$offset = isset($this->params['url']['offset']) ? $this->params['url']['offset'] : PAGEOFFSET;

		//記事一覧
		$sort =array();
		$sort['key'] = 'customer_id';
		$sort['value'] = 'DESC';

		$customers = $this->dtbCustomer->getItems($search,$sort,$limit,$offset);

		$this->Set('Customers',$customers);

	}


}
