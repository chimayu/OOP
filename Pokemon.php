<?php
// クラス：設計図
// インスタンス化：実体化
// プロパティ：属性
// メソッド：振る舞い
// アクセス修飾子：アクセスできる範囲を制限
    // public：どこからでもアクセス可能
    // protected：子クラスからアクセス可能
    // private：自分（そのクラス内）からしかアクセスできない
// コンストラクタ：インスタンス化したときに自動で呼ばれるメソッド
// 書き方 __construct

// クラス：設計図
class Pokemon
{
    // プロパティ：属性
    public $level;
    private $name;

    // コンストラクタ：インスタンス化したときに自動で呼ばれるメソッド
    public function __construct($name)
    {
        // $this === このクラスのインスタンス
        // ポケモンクラスのインスタンスのnameプロパティに、変数$nameを代入
        $this->name = $name;
    }

    // メソッド：振る舞い
    public function attack()
    {
        echo '攻撃';
    }

    // ゲッター　getPropertyName
    // 対義語はセッター　setPropatyName
    // プロパティに直接アクセスされないように
    public function getName()
    {
        return $this->name;
    }
}

// インスタンス化：実体化
// $pokemonという変数にPokemonクラスのインスタンスを代入
// new Class名()でインスタンス化
$pokemon = new Pokemon('ピカチュウ');

// インスタンス化すると、設計図にある
// プロパティとメソッドを使える
// インスタンス->プロパティ　でプロパティにアクセス
// プロパティの$は抜きます
// インスタンス->メソッド名()　でメソッドにアクセス
// -> アロー演算子　〜の
// ポケモンインスタンスのlevelに3を代入
$pokemon->level = 3;
echo $pokemon->level;
echo '<br><br>';

// ポケモンインスタンスのattackメソッドを呼び出す
$pokemon->attack();
echo '<br><br>';

// ポケモンインスタンスのnameにピカチュウを代入
// しかしプライベートのプロパティなので呼び出せない
// $pokemon->name = 'ピカチュウ';
echo $pokemon->getName();
echo '<br><br>';

// インスタンスは何個でも作れる
$fushigidane = new Pokemon('フシギダネ');
$zenigame = new Pokemon('ゼニガメ');

echo $fushigidane->getName();
echo '<br><br>';
echo $zenigame->getName();
echo '<br><br>';