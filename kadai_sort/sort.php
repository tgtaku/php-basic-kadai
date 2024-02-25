<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 ソート関数</title>
</head>

<body>
    <p>
        <?php
        // 配列に値を代入する
        $nums = [15,4,18,23,10];

        // 独自のソート関数定義
        function sort_nums(array $array, bool $order){
            // 引数$orderはTRUE（昇順）か
            if($order === true){
                // メッセージ出力
                echo '昇順にソートします。'.'</br>';

                // 引数$arrayを昇順にソート
                sort($array);
            }
            // FALSE（降順）
            else{
                // メッセージ出力
                echo '降順にソートします。'.'</br>';

                // 引数$arrayを降順にソート
                rsort($array);
            }

            // ソートした配列のデータを1行ずつ表示
            foreach ($array as $value) {
                echo "{$value}</br>";
            }
        }
        
        // 昇順にソートして出力
        echo sort_nums($nums,true);
        // 降順にソートして出力
        echo sort_nums($nums,false);

        ?>
    </p>
</body>

</html>
