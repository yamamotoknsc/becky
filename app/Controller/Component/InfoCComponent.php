<?php

App::uses('Component', 'Controller');

class InfoCComponent extends Component {

var $messages = array();


    public function setMessages($data){
        $this->messages[] = $data;
    }

    public function getMessages(){
        return $this->messages;
    }

    public function setErrorLog($name,$message){
            $this->log($name.'::'.$message);
    }


}
?>