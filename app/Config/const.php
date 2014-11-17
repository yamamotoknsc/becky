<?php

if($_SERVER["HTTP_HOST"] == 'localhost'){
	define('WEBROOT','/becky/');
	define('FBDEBUG',1);
//	define('FBDEBUG',0);
	define('DOMAIN','http://localhost/becky');
}else{
	define('DOMAIN','http://bizran.jp');
	define('WEBROOT','/');
	define('FBDEBUG',0);	
}

define('LIMIT',15);
define('PAGESTART',0);
define('PAGERLIMIT',5);

define('BLOGTAGADD',1);
define('BLOGTAGNEWS',2);
define('BLOGTAGITEM',3);

define('NEWSADD',1);
define('NEWSSALE',2);
define('NEWSPOST',3);

define('CONTACTID',104);

define('OFFSET',0);

define('BLOGPAGEITEMSLIMIT',3);

define('INDEXNEWSOFFSET',0);
define('INDEXNEWSLIMIT',10);
define('INDEXITEMLIMIT',3);

define('NEWSOFFSET',0);
define('NEWSLIMIT',15);
define('NEWSTOPLIMIT',3);

define('NOWPRINTING','assets/img/screenshot/nowprinting.png');

define('FBAPPID','1448329078773143');
define('FBSECRET','0d0665fb6442e692a29c3e20d03a9035');

define('SITENAME','ビズラン');
define('INDEXPAGETITLE','ビズラン(Bizran)|ビジネス徹底比較！ユーザーが選ぶNo.1ビジネスサービス！');
define('INDEXPAGEDESCRIPTION','会社設立代行や印刷会社・クラウドソーシングなどのビジネスサービス500社以上！ユーザーの投票で人気＆満足度がわかる。起業家・新規事業・スタートアップのための比較ランキングサイト');
define('INDEXPAGEKEYWORDS','会社設立代行,オフィス用品,印刷,名刺,プロバイダ,レンタルサーバー,ショッピングカート,クラウドソーシング');
define('LISTPAGETITLE','徹底比較・ランキング');
define('LISTPAGEDESCRIPTION','徹底比較・ランキングします');


define('NEWSPAGETITLE','ビズラン(Bizran)|ビジネス徹底比較！ユーザーが選ぶNo.1ビジネスサービス！');
define('NEWSPAGEDESCRIPTION','ビズラン - 徹底比較！ユーザーが選ぶNo.1ビジネスサービスはこれだ！');
define('NEWSPAGEKEYWORDS','法人設立代行,オフィス用品,バーチャルオフィス,名刺,プロバイダ,レンタルサーバー,ショッピングカート,クラウドソーシング');


define('PRIVACYPAGEDESCRIPTION','ビジネス徹底比較！ユーザーが選ぶNo１ビジネスサービスのプライバシポリシーになります。');
define('GUIDEPAGEDESCRIPTION','ビジネス徹底比較！ユーザーが選ぶNo１ビジネスサービスのご利用ガイドを説明します。');

define('ITEMPAGETITLE','で比較・ランキング');
define('ITEMPAGEDESCRIPTION','で比較・ランキング');

define('SITEMAPPAGETITLE','サイトマップ');
define('SITEMAPPAGEDESCRIPTION','サイトマップ');



define('PAGETITLE','お問い合わせ');


define('ABOUTPAGEKEYWORDS','ビズランについて');
define('ABOUTPAGEDESCRIPTION','ビジネス比較サイト・ビズランについての背景・成り立ちなどをお伝えします。本当にいいものを伝えたい。本当によいホームページをみんなの手で比較検討したい。そんな思いで作られています。');

define('FAQPAGEKEYWORDS','ビジネス比較,FAQ,よくある質問,比較について,お問い合わせ');
define('FAQPAGEDESCRIPTION','ビジネス比較をする際のよくある質問をまとめました。');

define('COMPANYPAGEKEYWORDS','会社概要,ナレッジスケープ');
define('COMPANYPAGEDESCRIPTION','ビズラン運営者情報について');


define('CONTACTPAGETITLE','お問い合わせ');
define('CONTACTPAGEKEYWORDS','ビジネス比較,お問い合わせ,比較方法');
define('CONTACTPAGEDESCRIPTION','ビジネス徹底比較|ビズランへのお問い合わせはこちらからどうぞ');

define('FACEBOOKPAGEKEYWORDS','FACEBOOK,ID,facebook連携,ログイン');
define('FACEBOOKPAGEDESCRIPTION','FACEBOOK連携がなぜ必要なのか？Facebook連携をすることで、投票の一意性と信頼性を担保しています。本当にいいものをみんなの手で作りたい。そんなホームページです。');


define('REQUESTPAGETITLE','サービスお申込み');
define('REQUESTPAGEDESCRIPTION','サービスお申込み');

define('ERRORMESSAGEVOTE','必ず一つは投票を行ってください');
define('WEBREQUESTSUBJECT','URL登録を受け付けました');
define('DEFUALTSORT',' service.id DESC');
define('PAGELIMIT',100);
define('PAGEOFFSET',0);
define('DEFAULTGENRE',1);

define('VOTEMAX',5);
//define('BASICAUTH','bizran:123123@');
define('BASICAUTH','');
define('CONTACTSUBJECT','お問い合わせ::');
define('MAILTO','info2@knsc.jp');
define('MAILFROM','info@bizran.jp');

define('MYPAGETITLE','マイページ');
define('MYPAGEKEYWORDS','マイページ');
define('MYPAGEDESCRIPTION','マイページ情報になります');        

define('FACEBOOKPAGETITLE','Facebookログイン');


?>