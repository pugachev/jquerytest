<?php
    $host = 'localhost'; // データベースのホスト名又はIPアドレス ※CodeCampでは「localhost」で接続できます
    $username = 'mtake';  // MySQLのユーザ名
    $passwd   = 'Manabu2010';    // MySQLのパスワード
    $dbname   = 'jquerytest';    // データベース名
    $result = null; //
    $link = mysqli_connect($host, $username, $passwd, $dbname);
    // 接続成功した場合
    if ($link) {
            // 文字化け防止
            mysqli_set_charset($link, 'utf8');
            $query = 'SELECT * FROM female';
            // クエリを実行します
            $result = mysqli_query($link, $query);
            
            // 1行ずつ結果を配列で取得します

          
            // 結果セットを開放します
            // mysqli_free_result($result);
            // 接続を閉じます
            // mysqli_close($link);
        // 接続失敗した場合
    } else {
        print 'DB接続失敗';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrap {
            display:flex;
            flex-flow: column;
            height:300px;
            margin:0 0 1em;
        }
        .content {
            padding:1em;
            margin:0.5em auto;
            width:50%;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="content">
            <select name="color" style="width:100px;height: 30px;">
                <?php
                    foreach($result as $key=>$val){
                        printf('<option value="%s">%s</option>', $val['femalenumber'],$val['femalename']);
                    }
                ?>
            </select>
        </div>
        <div class="content">
            <textarea name="kansou" rows="4" cols="40"></textarea>
        </div>
</body>
</html>