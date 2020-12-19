<?php
//コンソールでの入出力を記述した実行ファイル
require("rolls.php");

//---------------
echo("PHPバトルワールドへようこそ！\n");
echo("まずは主人公の名前とロールを決めてください！\n");

//コンソールから名前を取得
echo("\n▼名前を入力してください\n");
$name = (string) trim(fgets(STDIN));

//ロール選択画面
echo("\n▼続けてロールを選択してください\n");
echo("1:アタッカー → 物理攻撃特化のロールです\n");
echo("2:ブラスター → 攻撃魔法特化のロールです\n");
echo("3:ジャマー → 妨害魔法特化のロールです\n");

//$nの初期値に0をセットして、正しい数値が入力されるまでループ
$n = 0;
do {
  echo("(1〜3の整数で入力してください)\n");
  $n = trim(fgets(STDIN));
  } while ($n != 1 && $n != 2 && $n != 3 );

//switch文で$nと一致するロールのクラスにて、
//$player1インスタンスを生成する(名前を引数として渡す)
switch ($n) {
  case 1:
    $player1 = new Attacker($name);
    break;
  case 2:
    $player1 = new Blaster($name);
    break;
  case 3:
    $player1 = new Jammer($name);
}

//継承クラスのメソッドを呼び出す
echo "\nさっそく戦闘を開始しましょう！\n";
echo "\n▼物理攻撃を行うにはEnterキーを押してください。";
fgets(STDIN);
$player1->attack($name);

echo "\n▼続けてスキルを発動するにはEnterキーを押してください。";
fgets(STDIN);
$player1->skill($name);

echo "\nPHPドラゴンを倒した！\n";
