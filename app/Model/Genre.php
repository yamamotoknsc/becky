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
class Genre extends AppModel {
    var $name = 'Genre';
    var $useTable = false;    
    /**
    GENRETOP (アイテム一覧)　のTOPで表示されるアイテム
    単数
    **/
    public function getAllGenre() {
        return $this->Genre();
    }

    /**
    id sequence
    name genreメニュー　breadcrmbs で利用
    icon  genreメニュー　breadcrmbs で利用
    children 子供がいる場合にid を配列で記載
    comment TOPページ・listページで利用
    **/
    public function Genre(){

        $genre[1] = array('id'=>1,'urlname'=>'kaishaseturitu','name'=>'会社設立代行','icon'=>'agent.png','title'=>'会社名','children'=>false,'comment'=>'会社設立の第一歩。会社設立には、多くの手続きや準備が必要です。最適な法人設立代行選びで、スムーズに会社設立をしましょう。設立前の相談から設立後のアフターサポートまで、会社設立代行を比較。','keywords'=>'費用,設立方法,流れ,助成金,メリット,会社設立手続き,必要書類,印鑑');
        $genre[2] = array('id'=>2,'urlname'=>'office','name'=>'オフィス用品','icon'=>'pen.png','title'=>'サイト名','children'=>array(23,24,26),'comment'=>'文具やトナーなどの消耗品、OA・PC用品、パーティションや書棚などのオフィス家具。業務に欠かすことのできないオフィス用品を価格・納期・デザイン・品揃えなどで徹底比較。','keywords'=>'');
        $genre[23] = array('id'=>23,'urlname'=>'oa','name'=>'事務用品・OA全般','icon'=>'oa.png','title'=>'サイト名','children'=>false,'comment'=>'文具などの事務用品やOA・PC用品、パーティションや書棚などのオフィス家具。業務に欠かすことのできないオフィス用品を価格・納期・デザイン・品揃えなどで徹底比較。','keywords'=>'カタログ,激安オフィス用品,通販比較,シェア,web限定,オフィス家具,消耗品,soho');
        $genre[24] = array('id'=>24,'urlname'=>'pc','name'=>'PC直販','icon'=>'pc.png','title'=>'サイト名','children'=>false,'comment'=>'メーカー直販ならではの価格と品揃え。アウトレット商品や期間限定商品など、今まで欲しかったPCを手に入れるチャンス。法人契約によるボリュームディスカウントなど価格と性能でも比較。','keywords'=>'比較,btoおすすめ,直販比較,評判,おすすめ,メーカー,選び方,ランキング');
        $genre[26] = array('id'=>26,'urlname'=>'pcparts','name'=>'パソコン周辺機器','icon'=>'keyboard.png','title'=>'サイト名','children'=>false,'comment'=>'キーボードやマウス、タブレット端末やスマートフォンのケースなどのアクセサリーやUSBメモリなど、仕事をする上で必要となるパソコン周辺機器。品揃えや配送スピードなどでパソコン周辺機器通販サイトを比較。','keywords'=>'おすすめ,メーカー一覧,買い取り,ランキング,通販,便利グッズ,パソコン周辺機器,おもしろpc周辺機器');
        $genre[3] = array('id'=>3,'urlname'=>'virtualoffice','name'=>'バーチャルオフィス','icon'=>'v-office.png','title'=>'会社名','children'=>false,'comment'=>'会社運営において、最低限必要となる住所や電話番号などをレンタルすることが可能。都心に住所を置くことで、取引先の信頼を得ることが見込めます。立地や手厚いサービスなどでバーチャルオフィスを比較。','keywords'=>'登記,格安,ecstudio,バーチャルオフィス比較,格安バーチャルオフィス,レンタルオフィス,電話代行,バーチャルオフィス激安');
        $genre[4] = array('id'=>4,'urlname'=>'hanko','name'=>'会社印鑑','icon'=>'stamp.png','title'=>'サイト名','children'=>false,'comment'=>'会社印鑑通販サイト合計21社の人気・満足度をチェック！みんなが評価する比較ポイントを総まとめ。会社設立時に必要な代表者印をはじめ、口座開設に用いる銀行印や業務上で頻繁に使用する角印や会社印など、会社で必要となる印鑑を価格や品質などから比較。','keywords'=>'法人印鑑証明の取り方,法人印鑑セット,印鑑ケース,種類,登録,激安,代表者印,角印');
        $genre[5] = array('id'=>5,'urlname'=>'meisi','name'=>'名刺','icon'=>'businesscard.png','title'=>'サイト名','children'=>false,'comment'=>'ビジネスをする上で必ず必要となる名刺。名刺によって会社のイメージは左右されます。印刷価格・納期・入稿方法の簡易さ・ツールの説明の詳しさなど、名刺作成・印刷サービスを徹底比較。','keywords'=>'デザイン,サイズ,印刷,作成,用紙種類,個人名刺,データ入稿');
        $genre[6] = array('id'=>6,'urlname'=>'print','name'=>'印刷','icon'=>'print.png','title'=>'サイト名','children'=>false,'comment'=>'販促や宣伝広告などに使用するチラシやポスター、商品やサービスを魅力的に伝える冊子やカタログ、フライヤー、スマホケースなどの販促グッズもビジネスで欠かせません。納期や品質、価格などから印鑑会社を比較。','keywords'=>'パンフレット,フライヤー,カタログ,チラシ,DM,ポスター,パネル,会社案内');
        $genre[8] = array('id'=>8,'urlname'=>'provider','name'=>'プロバイダ','icon'=>'provider.png','title'=>'会社名','children'=>false,'comment'=>'情報共有や情報発信が行われるネット社会。社内において、はやめのネット環境構築が重要です。最適なプロバイダ選びで、インターネット接続をしましょう。インターネット速度や安定性などから、プロバイダを比較。','keywords'=>'乗り換え,おすすめ,変更,料金比較,徹底比較,フレッツ光,インターネット');
        $genre[9] = array('id'=>9,'urlname'=>'businessphone','name'=>'ビジネスフォン','icon'=>'businessphone.png','title'=>'会社名','children'=>false,'comment'=>'外線と内線の共有、保留転送など、多くの機能を備えるビジネスフォン。効率的なビジネスのためにはインフラを整えることが重要です。ビジネスフォン設置実績や業務改善のトータルソリューションからビジネスフォン設置業者を比較。','keywords'=>'料金,比較,激安,格安,評価');
        $genre[10] = array('id'=>10,'urlname'=>'domain','name'=>'ドメイン','icon'=>'domain.png','title'=>'サービス名','children'=>false,'comment'=>'インターネット上の「住所」と言われるドメイン。会社のホームページのURLやメールアドレスなどに使用されます。取得したドメインで会社のイメージや信用度が変わることも。ドメインの種類や管理のしやすさなどから、ドメイン取得業者を比較。','keywords'=>'IP,無料ドメイン,種類,独自ドメイン,料金,格安,メールアドレス,ホームページ');
        $genre[11] = array('id'=>11,'urlname'=>'rentalserver','name'=>'レンタルサーバー','icon'=>'rental-server.png','title'=>'サービス名','children'=>false,'comment'=>'ホームページの規模や運営の仕方によって、選び方が変わるのがレンタルサーバー。最適なレンタルサーバー選びはサイトパフォーマンスを上げ、コンバージョン率(成約率)を最大化する要因となります。価格や管理のしやすさなどからレンタルサーバーを比較。','keywords'=>'比較,無料レンタルサーバー,おすすめ,選び方,料金,スペック,wordpress,評判');
        $genre[12] = array('id'=>12,'urlname'=>'cart','name'=>'ショッピングカート','icon'=>'cart.png','title'=>'サービス名','children'=>false,'comment'=>'インターネット上で商品やサービスの販売と購入ができるネットショッピング。時間や立地条件に左右されることなく、商材をPRすることができます。価格や導入店舗数、操作性などからショッピングカートのASPを比較。','keywords'=>'ネットショップ,開業,スマートフォン,初期費用,EC,無料作成,ネット通販,ネット販売');
        $genre[14] = array('id'=>14,'urlname'=>'software','name'=>'ソフトウェア','icon'=>'software.png','title'=>'ソフト名','children'=>array(15,16,18),'comment'=>'会社の情報をウィルスやスパムの危険から守るセキュリティソフトと会計管理や経理業務をサポートする会計ソフト、会社で欠かせない必要なソフトウェアを比較。','keywords'=>'');
        $genre[15] = array('id'=>15,'urlname'=>'security','name'=>'セキュリティソフト','icon'=>'security.png','title'=>'ソフト名','children'=>false,'comment'=>'情報は会社の大切な財産。複雑化する情報社会の中で、大切な情報を守るのは会社の義務です。多様化するウィルスやスパムから、情報を守るセキュリティソフトを比較。','keywords'=>'体験版,お試し,比較,ダウンロード,評価,評判');
        $genre[16] = array('id'=>16,'urlname'=>'kaikei','name'=>'会計ソフト','icon'=>'account.png','title'=>'サービス名','children'=>false,'comment'=>'会社の規模や業種、業態に関わらず、どの会社でも必要となるのが会計。最適な会計ソフト選びで、業務効率を上げていきましょう。操作性や価格、サポートから会計ソフトを比較。','keywords'=>'使いやすさ,おすすめ,口コミ,評価,無料おすすめ,個人事業主,青色申告,mac会計ソフト');
        $genre[18] = array('id'=>18,'urlname'=>'officesoft','name'=>'オフィスソフト','icon'=>'officesoft.png','title'=>'サービス名','children'=>false,'comment'=>'オフィスでの仕事をサポートしてくれるオフィスソフト。オフィスソフトはワープロや表計算、プレゼンテーションツールからデータベースソフトまで多岐にわたります。使いやすさや価格から、オフィスでの仕事に欠かせないオフィスソフトを比較。','keywords'=>'word,excel,ワード,エクセル,無料,比較,キングソフト,mac');
        $genre[17] = array('id'=>17,'urlname'=>'crowdsourcing','name'=>'クラウドソーシング','icon'=>'crowdsourcing.png','title'=>'サービス名','children'=>false,'comment'=>'スタートアップの会社は人材の確保が困難。インターネット上で業務の委託をするクラウドソーシングを利用することで、そのときに必要な人材を確保することが可能です。納品物のクオリティや納品スピードなどから、クラウドソーシングサービスを比較。','keywords'=>'翻訳,shinobi,クラウド,アプリ開発,ライティング,ホームページ制作,発注,依頼');        
//        $genre[25] = array('id'=>25,'urlname'=>'software','name'=>'パソコンソフト','icon'=>'pasoconsoft.png','title'=>'','children'=>false,'comment'=>'オフィスでの仕事をサポートしてくれるオフィスソフト。オフィスソフトはワープロや表計算、プレゼンテーションツールからデータベースソフトまで多岐にわたります。使いやすさや価格から、オフィスでの仕事に欠かせないオフィスソフトを比較。','keywords'=>'word,excel,ワード,エクセル,無料,比較,windows,mac');
        $genre[19] = array('id'=>19,'urlname'=>'bank','name'=>'銀行','icon'=>'bank.png','title'=>'銀行名','children'=>array(20,21),'comment'=>'会社設立に際し、法人口座の開設は欠かせません。設立後も、振込や入出金など、頻繁に利用することになりますので、最も適した銀行で口座開設をしましょう。都市銀行とネット銀行の2種類から、銀行を比較。','keywords'=>'');
        $genre[20] = array('id'=>20,'urlname'=>'citybank','name'=>'都市銀行','icon'=>'city-bank.png','title'=>'銀行名','children'=>false,'comment'=>'都市銀行は全国的に展開していることから、利便性が高く、都市銀行で法人口座を開設することにより、取引会社からの信頼を獲得することができます。口座開設のわかりやすさや月額基本料などのコストから都市銀行を比較。','keywords'=>'ランキング,比較,おすすめ,個人事業,開設,融資,信用');
        $genre[21] = array('id'=>21,'urlname'=>'netbank','name'=>'ネット銀行','icon'=>'netbank.png','title'=>'銀行名','children'=>false,'comment'=>'ネット銀行は都市銀行や地方銀行のように店舗などがないため、振込手数料が安く、24時間いつでも決済することができます。口座開設のわかりやすさや利便性などからネット銀行を比較。','keywords'=>'おすすめ,ランキング,japanネット銀行,簡単開設,早い,評判');
        $genre[22] = array('id'=>22,'urlname'=>'creditcard','name'=>'法人クレジットカード','icon'=>'creditcard.png','title'=>'会社名','children'=>false,'comment'=>'ネット上での決済や消耗品・雑費の購入にもなにかと便利なクレジットカード。法人クレジットカードを作ることにより、現金出納が楽になったりキャッシュフローに余裕が生まれるなどメリットがあります。発行の容易さや年会費などから法人クレジットカードを比較。','keywords'=>'審査,評判,比較,審査甘い,おすすめ,ポイント,無料');

        $genre[27] = array('id'=>27,'urlname'=>'english','name'=>'オンライン英会話','icon'=>'english.png','title'=>'サービス名','children'=>false,'comment'=>'英語が社内公用語とする企業もあり、ビジネス英会話習得の需要は増加傾向にあります。最適なオンライン英会話選びでビジネスで武器となる英語を身につけましょう。講師の質や早朝コース・サポートの充実度などでオンライン英会話を比較。','keywords'=>'早朝,おすすめ,評判,口コミ,ビジネス,ネイティブ');


//        $genre[25] = array('id'=>28,'name'=>'','icon'=>'fa-tachometer','title'=>'','children'=>false,'comment'=>'','keywords'=>'');                        
//        $genre[26] = array('id'=>29,'name'=>'','icon'=>'fa-tachometer','title'=>'','children'=>false,'comment'=>'','keywords'=>'');                        


        return $genre;
    }

public function getGenreKeywordsByGenreID($genreID){
    $Genres = $this->Genre();
    return $Genres[$genreID]['keywords'];
}

    /**
    親は多次元になっている子どもたちをすべて一元的に指定する
    **/
    public function GenreChild(){
        $genre = array();
        $genre[14] = array(15,16,18);
        $genre[19] = array(20,21);
        $genre[2]  = array(23,24,26);
//        $genre[13] = array(17,18,19,20,21,22,23,24,25,26);
        return $genre;
    }


    /**
    一覧画面で各タイトルごとのtooltipで表示される内容
    **/
    public function GenreTitle(){
        $genre[1] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'設立前の相談','comment'=>"会社設立に関する\n疑問などの相談サポート\nについての評価です"),
                3=>array('title'=>'スムーズな手続き','comment'=>"会社設立に必要な\n手続きをスムーズに\n行えたかの評価です"),
                4=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。"),
                5=>array('title'=>'設立後のサポート','comment'=>"会社設立後の\n各種必要手続きなどの\nサポートについての\n評価です。"),
                );
        $genre[2] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした総合的な評価です。"),
                2=>array('title'=>'品揃え','comment'=>"品揃えについて\nの評価です。"),
                3=>array('title'=>'デザイン','comment'=>"デザイン性について\nの評価です。"),
                4=>array('title'=>'配送スピード','comment'=>"注文から商品到着まで\nのスピードについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定に\nついての評価です。")
                );
        $genre[3] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),            
                2=>array('title'=>'内見・事前相談','comment'=>"内見・事前相談の内容\nについての評価です。"),
                3=>array('title'=>'ロケーション','comment'=>"バーチャルオフィスの\n立地条件における評価です。"),
                4=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。"),
                5=>array('title'=>'サポート','comment'=>"サポートについての評価です。")
                );
        $genre[4] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),            
                2=>array('title'=>'品揃え','comment'=>"印材の種類や扱う印鑑の\n種類についての評価です。"),
                3=>array('title'=>'納期','comment'=>"注文から到着までの\n速さについての評価です。"),
                4=>array('title'=>'品質','comment'=>"納品物の品質についての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。"),
                );
        $genre[5] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'入稿方法のわかりやすさ','comment'=>"入稿ファイル形式の種類の豊富さや\nスムーズに入稿することができたかの評価です。"),
                3=>array('title'=>'納期','comment'=>"注文から納品物到着までの\n速さについての評価です。"),
                4=>array('title'=>'印刷品質','comment'=>"名刺の品質の\n評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[6] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'入稿方法のわかりやすさ','comment'=>"入稿ファイル形式の\n種類の豊富さやスムーズに\n入稿することができたかの評価です。"),
                3=>array('title'=>'納期','comment'=>"注文から納品物到着までの\n速さについての評価です。"),
                4=>array('title'=>'印刷品質','comment'=>"印刷物の\n品質の評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[7] = array(
                1=>array('title'=>'','comment'=>""),
                2=>array('title'=>'','comment'=>""),
                3=>array('title'=>'','comment'=>""),
                4=>array('title'=>'','comment'=>""),
                5=>array('title'=>'','comment'=>"")
                );
        $genre[8] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'利用開始までのスピード','comment'=>"インターネット接続までの\n速さについての評価です。"),
                3=>array('title'=>'回線速度','comment'=>"回線速度についての\n評価です。"),
                4=>array('title'=>'安定性','comment'=>"ネット回線が途切れないことや\n速度の安定性についての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[9] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'導入相談','comment'=>"導入に伴う設計や\n提案内容、工事前打ち合わせを含め社内の\nOA機器に関することの相談などについての評価です。"),
                3=>array('title'=>'利用開始までのスピード','comment'=>"ビジネスフォンを利用することができるまでの速さについての評価です。"),
                4=>array('title'=>'動作確認','comment'=>"電話機器の説明や希望通りに使用することができたかについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[10] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'取得までの手順','comment'=>"ドメイン取得までスムーズに\n行うことができたかに\nついての評価です。"),
                3=>array('title'=>'設定マニュアルのわかりやすさ','comment'=>"DNS設定や移管した\nドメインの設定などの\nわかりやすさについての評価です。"),
                4=>array('title'=>'管理画面の使いやすさ','comment'=>"DNS設定やマルチドメイン設定などの使いやすさについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[11] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'安定性','comment'=>"サイトの表示速度などデータの返送時間や\nデータアップロード時間についての評価です。"),
                3=>array('title'=>'機能の豊富さ','comment'=>"MySQLなどのデータベースや\nPHPなどのCGI、メーラーなどの機能についての評価です。"),
                4=>array('title'=>'管理画面の使いやすさ','comment'=>"管理画面を利用するのにわかりやすく、使いこなすことができるか"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[12] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'使いやすさ','comment'=>"画像の設定や支払い設定など\nネットショップ開業まで\nスムーズに行えたかについての評価です。"),
                3=>array('title'=>'機能の豊富さ','comment'=>"アクセス解析や独自ドメイン対応\nクレジットカード決済などの機能についての評価です。"),
                4=>array('title'=>'安定性','comment'=>"商品の表示速度や\nデータベースエラー\nなどが生じないかについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[17] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'クオリティ','comment'=>"制作物や納品物の\n品質についての評価です。"),
                3=>array('title'=>'スピード','comment'=>"発注から納品までの\n速さについての評価です。"),
                4=>array('title'=>'使いやすさ','comment'=>"発注から納品、支払いまで\nスムーズに行うことができたか\nについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[14] = array(
                1=>array('title'=>'','comment'=>""),
                2=>array('title'=>'','comment'=>""),
                3=>array('title'=>'','comment'=>""),
                4=>array('title'=>'','comment'=>""),
                5=>array('title'=>'','comment'=>"")
                );
        $genre[15] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'検出率','comment'=>"ウィルスやスパムの\n検出率についての評価です。"),
                3=>array('title'=>'軽さ','comment'=>"パソコンの起動やソフトウェアなど\nの立ち上げに時間がかからないかについての評価です。"),
                4=>array('title'=>'操作性','comment'=>"管理画面の見やすさ\nや使いやすさについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。"),
                );
        $genre[16] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'機能性','comment'=>"会計ソフトに搭載された機能についての評価です。"),
                3=>array('title'=>'使いやすさ','comment'=>"機能を使いこなせるなど\n会計ソフトの使いやすさについての評価です。"),
                4=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。"),
                5=>array('title'=>'サポート','comment'=>"電話、メールなどのサポートについての評価です。")
                );
        $genre[18] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'使いやすさ','comment'=>"機能メニューのわかりやすさや\n使いやすさについての評価です。"),
                3=>array('title'=>'軽さ','comment'=>"パソコンの起動やソフトウェアなど\nの立ち上げに時間がかからないかについての評価です。"),
                4=>array('title'=>'互換性','comment'=>"他のオフィスソフトの互換性\nの高さについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[19] = array(
                1=>array('title'=>'','comment'=>""),
                2=>array('title'=>'','comment'=>""),
                3=>array('title'=>'','comment'=>""),
                4=>array('title'=>'','comment'=>""),
                5=>array('title'=>'','comment'=>"")
                );
        $genre[20] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'口座開設のスムーズさ','comment'=>"法人口座を開設する際に必要な書類や手続き\n開設までの期間などの評価です。"),
                3=>array('title'=>'コスト','comment'=>"月額基本料と振込手数料など\n口座利用にかかる費用についての評価です。"),
                4=>array('title'=>'利便性','comment'=>"入出金や振込、ATM利用や利用可能時間など\n使いやすさについての評価です。"),
                5=>array('title'=>'サポート','comment'=>"法人口座開設後のサポート\n(融資やキャンペーンに関するお知らせ等)についての評価です。")
                );
        $genre[21] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'口座開設のスムーズさ','comment'=>"法人口座を開設する際に\n必要な書類や手続き\n開設までの期間などの評価です。"),
                3=>array('title'=>'コスト','comment'=>"月額基本料と振込手数料など\n口座利用にかかる費用についての評価です。"),
                4=>array('title'=>'利便性','comment'=>"入出金や振込、ATM利用など\n使いやすさについての評価です。"),
                5=>array('title'=>'サポート','comment'=>"法人口座開設後のサポート\nについての評価です。")
                );
        $genre[22] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'年会費','comment'=>"クレジットカードの年会費についての評価です。"),
                3=>array('title'=>'利便性','comment'=>"利用可能条件など\nクレジットカードの使いやすさについての評価です。"),
                4=>array('title'=>'特典の充実度','comment'=>"ポイント還元率など\n特典の充実度についての評価です。"),
                5=>array('title'=>'サポート','comment'=>"カード発行の必要条件など\nカード発行の難易度についての評価です。")
                );
        $genre[23] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'品揃え','comment'=>"品揃えについての評価です。"),
                3=>array('title'=>'デザイン','comment'=>"デザイン性について\nの評価です。"),
                4=>array('title'=>'配送スピード','comment'=>"注文から商品到着まで\nのスピードについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[24] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'品揃え','comment'=>"品揃えについての評価です。"),
                3=>array('title'=>'デザイン','comment'=>"デザイン性について\nの評価です。"),
                4=>array('title'=>'配送スピード','comment'=>"注文から商品到着まで\nのスピードについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );
        $genre[26] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'品揃え','comment'=>"品揃えについての評価です。"),
                3=>array('title'=>'サポート','comment'=>"サポートや保証内容について\nの評価です。"),
                4=>array('title'=>'配送スピード','comment'=>"注文から商品到着まで\nのスピードについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );    
        $genre[27] = array(
                1=>array('title'=>'満足度','comment'=>"ビズランユーザー\nが5段階評価で\nレビューした\n総合的な評価です。"),
                2=>array('title'=>'講師のクオリティ','comment'=>"受講者に合った授業\nの進め方や教え方についての評価です。"),
                3=>array('title'=>'コースの充実度','comment'=>"日常会話、ビジネス利用\nレベルによるプラン分けなど、\nコースが充実しているかについての評価です。"),
                4=>array('title'=>'サポート体制','comment'=>"メールや電話など\n問い合わせ方法や\nサポート体制が充実しているかについての評価です。"),
                5=>array('title'=>'価格','comment'=>"価格設定\nについての評価です。")
                );            
        return $genre;                                          
    }



    /**
    StaticPage(global navi に載せないpageのリストを作成)
    **/
    public function GenreStatic(){
        $genre = array();
        $genre[101] = array('pagename'=>'pages/privacy','id'=>101,'name'=>'プライバシーポリシー','icon'=>'fa fa-info-circle','children'=>false,'comment'=>PRIVACYPAGEDESCRIPTION,'keywords'=>'');
        $genre[102] = array('pagename'=>'pages/about','id'=>102,'name'=>'ビズランについて','icon'=>'fa fa-check-square-o','children'=>false,'comment'=>ABOUTPAGEDESCRIPTION,'keywords'=>ABOUTPAGEKEYWORDS);
        $genre[103] = array('pagename'=>'pages/faq','id'=>103,'name'=>'よくあるご質問','icon'=>'glyphicon glyphicon-question-sign','children'=>false,'comment'=>FAQPAGEDESCRIPTION,'keywords'=>FAQPAGEKEYWORDS);
        $genre[107] = array('pagename'=>'pages/company','id'=>107,'name'=>'運営者概要','icon'=>'fa fa-flag','children'=>false,'comment'=>COMPANYPAGEDESCRIPTION,'keywords'=>COMPANYPAGEKEYWORDS);        
        $genre[104] = array('pagename'=>'contact','id'=>104,'name'=>'お問い合わせ','icon'=>'fa fa-envelope-o','children'=>false,'comment'=>CONTACTPAGEDESCRIPTION,'keywords'=>CONTACTPAGEKEYWORDS);
        $genre[105] = array('pagename'=>'mypage','id'=>105,'name'=>'マイページ','icon'=>'fa fa-user','children'=>false,'comment'=>'マイページ');        
        $genre[106] = array('pagename'=>'Fbconnect','id'=>106,'name'=>'Facebookログイン','icon'=>'fa fa-facebook-square','children'=>false,'comment'=>FACEBOOKPAGEDESCRIPTION,'keywords'=>FACEBOOKPAGEKEYWORDS);
        $genre[108] = array('pagename'=>'pages/terms','id'=>108,'name'=>'利用規約','icon'=>'fa fa-exclamation-circle','children'=>false,'comment'=>'利用規約','keywords'=>'');
        $genre[109] = array('pagename'=>'pages/guide','id'=>109,'name'=>'ご利用ガイド','icon'=>'fa fa-hand-o-right','children'=>false,'comment'=>GUIDEPAGEDESCRIPTION,'keywords'=>'');
        $genre[110] = array('pagename'=>'pages/campaign1','id'=>110,'name'=>'Amazonギフト券500円キャンペーン','icon'=>'fa fa-bullhorn"','children'=>false,'comment'=>'Amazonギフト券500円キャンペーン','keywords'=>'投票,キャンペーン,Amazon,ギフト券');
        return $genre;
    }


    public function GenreSubpage(){
        $genre = array();
        $genre['hikaku'] = array('name'=>'比較ポイント','icon'=>'glyphicon glyphicon-align-left','child'=>'');
        $genre['yougo'] = array('name'=>'用語集','icon'=>'fa fa-book','child'=>'');
        $genre['blog'] = array('name'=>'記事一覧','icon'=>'fa fa-list','child'=>array('blog'));
        return $genre;
    }

    public function getGenreSubpageByGenreName($name){
        $genre = $this->GenreSubpage();
        return $genre[$name];
    }

    /**
    GenreID を元にGenreデータを取得
    **/
    public function getGenreByGenreID($id){
        $all = $this->Genre();
        return isset($all[$id])? $all[$id] : '';
    }



    /**
    genreIDを元にGenreTitleを取得
    List画面で、各項目titleを表示する
    **/
    public function getGenreTitleByGenreID($genreID){
        $genreID = isset($genreID)? $genreID : DEFAULTGENRE;
        $genre = $this->GenreTitle();
        return $genre[$genreID];
    }

    /**
    urlNameを元にGenreIDを取得
    **/
    public function getGenreIDByUrlName($urlname){
        $genres = $this->Genre();

        foreach($genres as $genre){
            if($genre['urlname'] == $urlname){
                return $genre['id'];
            }
        }

        return DEFAULTGENRE;
    }

    public function getGenreByUrlName($urlname){
        $genres = $this->Genre();

        foreach($genres as $genre){
            if($genre['urlname'] == $urlname){
                return $genre;
            }
        }

        return '';

    }

    /**
    urlNameを元にGenreIDを取得
    **/
    public function getUrlnameByGenreID($genreID){
        $genres = $this->Genre();
        return $genres[$genreID]['urlname'];
    }


    /**
    staticページ(genreに属さないページの一覧を取得)
    **/
    public function getAllStaticGenre(){
        return $this->GenreStatic();
    }

    /**
    staticページの情報をGenreIDを用い取得
    **/
    public function getStatigGenreByGenreID($genreID){
        $genre = $this->GenreStatic();
        return isset($genre[$genreID]) ? $genre[$genreID] : null;
    }

    /**
    staticページの情報をpagenameを用い取得
    **/
    public function getStaticGenreIDByPageName($pagename){
        $genres = $this->GenreStatic();
        foreach($genres as $genre){
            if($genre['pagename'] == $pagename){
                return $genre['id'];
            }
        }
        return null;
    }


}
