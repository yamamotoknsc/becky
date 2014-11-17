<?php

App::uses('Component', 'Controller');

class MailCComponent extends Component {

public $components = array('InfoC');

function mailsend($mailto,$subject,$messages){

	mb_language("Ja") ;
	mb_internal_encoding("UTF-8") ;

	$mail_from = MAILFROM;

	$mailfrom="From:" .mb_encode_mimeheader("bizran") ."<$mail_from>";

	if(mb_send_mail($mailto,$subject,$messages,$mailfrom)){
		$this->InfoC->setErrorLog('ContactMailsend','MailSend true');				
	}else{
		$this->InfoC->setErrorLog('ContactMailsend','MailSend False');
	}

}

}
?>