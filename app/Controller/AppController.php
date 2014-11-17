<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

//facebook login
App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $ext = '.php';
  var $metaData = array();
  var $breadcrumbs = array();
  
  public $uses = array('Genre');
//  public $helpers = array('UseFull','Bizran');
  public $components = array('InfoC','Session','UserC','CheckC','MetaC','VoteC','RequestHandler');


  public function beforeFilter(){
        $this->set('genreID','');
        $this->set('Genres',$this->Genre->getAllGenre());
        $this->set('BreadGenres',$this->Genre->getAllGenre());
        $this->set('GenresChild',$this->Genre->GenreChild());
        $this->set('subpage','');
        $this->set('pagetitle','');

  }


  public function beforeRender(){
        //UserDATAを取得
        $this->set('UserData',$this->UserC->getUserData());
        //FacebookLogout用URLを設定
        $this->set('FbLogoutURL',$this->UserC->getLogoutURL());
        //metaDataの設定
        $this->set('metaData',$this->metaData);
        //metaがうまく設定されていない場合error_logに出力する        
        $this->CheckC->NullCheckMetaData($this->name.'::'.$this->action,$this->metaData);
        //breadcrumbの設定
        $this->set('breadcrumbs',$this->breadcrumbs);

        if($this->RequestHandler->isMobile()){
          $this->set('mobile',true);
        }
  }



    /**
     metaDataの設定
    **/
  public function setMetaData($genreID,$title,$keywords,$description){
    $genre = $this->Genre->getGenreByGenreID($genreID);
    if($genre){
      $this->set('genre',$genre);
      $keywords .= $genre['name'];
      $title = $genre['name'];
      $this->metaData = $this->MetaC->setMetaData($title.LISTPAGETITLE,$keywords,$genre['comment']);
    }else{
      $this->metaData = $this->MetaC->setMetaData($title,$keywords,$description);
    }



  }

}
