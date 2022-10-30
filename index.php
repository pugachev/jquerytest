<?php


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
            <select name="color" style="width:50%;height: 30px;">
            <option value="0">馬場典子</option>
            <option value="1" selected>小澤陽子</option>
            <option value="2">森香澄</option>
            <option value="3">相場詩織</option>
            <option value="4">上野愛奈</option>
            <option value="5">堤礼実</option>
            <option value="6">良原安美</option>
          </select>
        </div>
        <div class="content">
            <textarea name="kansou" rows="4" cols="40"></textarea>
        </div>
</body>
</html>