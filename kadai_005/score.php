<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>テストの平均点を計算しよう</title>
</head>

<body>
    <p>合計点と平均点を算出して出力する</p>
    <p>
        <?php
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 合計点
        $score_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

        // 平均点
        $score_avarage = $score_total / 10;

        // 出力
        echo "合計点：{$score_total}点";
        echo '<br>';
        echo "平均点：{$score_avarage}点";
        ?>
    </p>
</body>

</html>
