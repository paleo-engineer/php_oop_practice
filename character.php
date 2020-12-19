<?php
//キャラクターに共通するスーパークラスを定義
class Character {
  //クラスプロパティ
  private $name;
  private $params;
  
  //クラスメソッド
  //クラス外から$nameを引数として受け取り、値をセットするセッター
  public function set_name($name) {
    $this->name = $name;
  }

  //$nameをクラス外から読み取るためのゲッター
  public function get_name() {
    return $this->name;
  }
  
  //継承クラスから受け取ったパラメータを代入するセッター
  public function set_params($params) {
    $this->params = $params;
  }

  //$paramsをクラス外から読み取るためのゲッター(使ってない？)  
  public function get_params() {
    return $this->params;
  }
  
  //各ロールに共通する技をクラスメソッドとして定義
  public function attack($name) {
  echo "{$name}の攻撃。\n";
  echo "PHPドラゴンに〇〇のダメージ！\n";
  }
}
