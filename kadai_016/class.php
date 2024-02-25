<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 クラス</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            public $name;
            public $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッド定義
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        class Animal {
            // プロパティを定義する
            public $name;
            public $height;
            public $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッド定義
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);
        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        echo '<br>';
        
        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);
        // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
        echo '<br>';

        // メソッドへアクセス
        $food->show_price();
        $animal->show_height();
        ?>
        
    </p>
</body>

</html>
