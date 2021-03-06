<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class dtbCustomer extends AppModel {
    public $name = 'dtbCustomer';
    var $useTable = 'dtb_customer';    

    /**
    複数のITEMIDを受け取って複数のITEM情報を取得
    複数
    * @param sessionITEMS
    **/
    public function getItems($search='',$sort,$limit,$offset) {
        $conditions = array();
        if($search['month']){
            $conditions['conditions'][] = array('genre_id'=>$genreID);
        }


            $conditions['order']     = array($sort['key']=>$sort['value']);
            $conditions['limit']     = $limit;
            $conditions['offset']    = $offset;


        $all = $this->find('all',$conditions);
        return $all;
    }

        /**
    ITEMIDを受け取ってITEM情報を取得
    単数
    **/
    public function getItemByID($itemID,$fields=array()) {
        if(!$itemID){return;}
        $conditions['conditions'] = array(
                            'customer_id'=>$itemID,
                            );
        if($fields){
            $conditions['fields'] = $fields;
        }

        $all = $this->find('first',$conditions);
        return $all;
    }


}
