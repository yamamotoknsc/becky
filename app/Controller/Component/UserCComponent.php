<?php

App::uses('Component', 'Controller');

class UserCComponent extends Component {
    var $name = 'UserC';
    var $components = array('Item','Session');


    public function createFacebook() {
        return new Facebook(
                            array(
                                'appId' => FBAPPID,
                                'secret' => FBSECRET
                                )
                            );
    }

    public function getUserData(){//トップページ
//        $facebook = $this->createFacebook(); //【2】アプリに接続
        $myFbData = $this->Session->read('bizranFbdata');//【3】facebookのデータ

        $fbdummy = array(
          "id"=> "7595863174322471",
          "birthday"=> "03/30/1978",
          "email"=> "mkazuoyamamoto@gmail.com",
          "first_name"=> "和男",
          "gender"=> "男性",
          "last_name"=> "山本",
          "link"=> "https://www.facebook.com/app_scoped_user_id/100008032995634/",
          "locale"=> "en_US",
          "name"=> "なれっじ　すけーぷ",
          "timezone"=>9,
          "updated_time"=> "2014-06-05T15:57:42+0000",
          "verified"=>true
        );
    
        if(FBDEBUG){
          return $fbdummy;
        }else{
          return $myFbData;
        }

    }

    public function getLogoutURL(){
        $facebook = $this->createFacebook(); //【2】アプリに接続
        return $facebook->getLogoutUrl();      
    }

    public function getUserID(){
      $data = $this->getUserData();
      return $data['id'];
    }

	/**
	アイテムIDをsessionに指定
	**/
    public function setHistoryItemSession($itemID) {
//    	$this->session->set('items',$itemID);

    }



	/**
	アイテムIDを閲覧履歴から取得
	**/
    public function getHistoryItemSession() {
//    	$this->session->get();

    }



    /**
    レビューしたアイテムの一覧を取得
    **/
    public function getReviewItems($userID) {
        $ret = 'reviews';
        return $ret;
    }


	/**
	アイテムIDをお気に入りに追加
	**/
    public function setFavoriteItem($itemID) {

    }

	/**
	お気に入りアイテムを取得
	**/
    public function getFavoriteItem() {

    }

	/**
	アイテムIDを閲覧履歴登録DB
	**/
    public function setHistoryItems($itemID) {

    }
	/**
	アイテムIDを閲覧履歴DBから取得
	**/
    public function getHistoryItems() {

    }





}
?>