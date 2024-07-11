<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_ソート関数</title>
</head>
<body>
    <p>
    <?php
    $nums = [15, 4, 18, 23, 10];
    function sort_2way($array, $order){
        if($order === TRUE){
            //昇順にソート
            echo '昇順にソートします。<br>';
            sort($array);
            echo ' ';
            foreach($array as $num){
                echo $num . '<br>';
            }
        }elseif($order === FALSE){
            //降順にソート 
            echo '降順にソートします。<br>';
            rsort($array);
            echo ' ';
            foreach($array as $num){
                echo $num . '<br>';
            }
    }
    echo '<br>';
}
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
    ?>
    </p>
</body>
</html>

