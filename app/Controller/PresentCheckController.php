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
class PresentCheckController extends AppController {


	public $components = array('ItemC','MetaC','MailC','WebrequestC');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('dtbPresent','dtbCustomer','dtbPresentHistory');

	/**
	 * 一覧TOP
	  一覧ページTOP
	 * @param genreID sort limit offset
	 */
	public function index() {

		$presentID = isset($this->params['url']['presentID']) ? $this->params['url']['presentID'] : null;
		$customerID = isset($this->params['url']['customerID']) ? $this->params['url']['customerID'] : null;

		$ret = $this->dtbPresent->getCountItemsByPresentID($presentID);
		//count = 0ならerror

		$ret = $this->dtbPresentHistory->getCountItemsByPresentIDAndCustomerID($presentID,$customerID);

		//count = 0 ならinsert
		//count > 0 なら error

		$this->Set('Message',$ret);

	}



}
