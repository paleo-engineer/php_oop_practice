<?php
//スーパークラスCharacterを継承した各ロールのクラスを定義
require("character.php");

//-----------------------
//①アタッカークラス
class Attacker extends Character {
  
  //アタッカーとしての初期能力を定義
  private $attacker_params = array("roll"=>"アタッカー", "power"=>255, "mind"=>150);
  
  //インスタンスが生成されたときに実行するコンストラクタ
  public function __construct($name) {
    parent::set_name($name);
    parent::set_params($this->attacker_params);
    
    echo "{$name}は{$this->attacker_params["roll"]}として以下の初期能力がセットされました。\n";
    echo "攻撃力：{$this->attacker_params["power"]}\n";
    echo "魔力：{$this->attacker_params["mind"]}\n";
    echo "使えるスキル：会心の一撃\n";
  }
  
  //新たなクラスメソッドとして技を定義
  public function skill($name) {
    echo "{$name}の会心の一撃！\n";
    echo "PHPドラゴンに〇〇のダメージ！\n";
  }
}

//-----------------------
//②ブラスタークラス
class Blaster extends Character {

  //ブラスターとしての初期能力を定義
  private $blaster_params = array("roll"=>"ブラスター", "power"=>150, "mind"=>255);
  
  //インスタンスが生成されたときに実行するコンストラクタ
  public function __construct($name) {
    parent::set_name($name);
    parent::set_params($this->blaster_params);
    echo "{$name}のロールは{$this->blaster_params["roll"]}です。\n";
    echo "{$this->blaster_params["roll"]}として以下の初期能力がセットされました。\n";
    echo "攻撃力：{$this->blaster_params["power"]}\n";
    echo "魔力：{$this->blaster_params["mind"]}\n";
    echo "使えるスキル：ファイア\n";
  }
  
  //新たなクラスメソッドとして技を定義
  public function skill($name) {
    echo "{$name}はファイアを唱えた！\n";
    echo "PHPドラゴンに〇〇のダメージ！\n";
  }
}

//-----------------------
//③ジャマークラス
class Jammer extends Character {
  
  //ジャマーとしての初期能力を定義
  private $jammer_params = array("roll"=>"ジャマー", "power"=>180, "mind"=>180);
  
  //インスタンスが生成されたときに実行するコンストラクタ
  public function __construct($name) {
    parent::set_name($name);
    parent::set_params($this->jammer_params);
    echo "{$name}のロールは{$this->jammer_params["roll"]}です。\n";
    echo "{$this->jammer_params["roll"]}として以下の初期能力がセットされました。\n";
    echo "攻撃力：{$this->jammer_params["power"]}\n";
    echo "魔力：{$this->jammer_params["mind"]}\n";
    echo "使えるスキル：バイオ\n";
  }
  
  //新たなクラスメソッドとして技を定義
  public function skill($name) {
    echo "{$name}はバイオを唱えた！\n";
    echo "PHPドラゴンに〇〇のダメージ！\n";
    echo "PHPドラゴンは猛毒状態になった！\n";
  }
}

?>