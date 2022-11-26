<?php
try 
{
    $db = new PDO('mysql:dbname=jquerytest;host=localhost;charset=utf8','mtake','Manabu2010');
} 
catch (PDOException $e) 
{
    echo 'DB接続エラー！: ' . $e->getMessage();
}
$stmt = $db->prepare('select * from female');
$result=null;
if($stmt->execute()){
    $result = $stmt->fetchAll();
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <script>
    $(function() {
        $("#initialSelect").on('click',function(){
            // $(this).prev().clone(true).appendTo("#tgt");
            // $("#female-groups").find("select[name*=female]").children().length;
            // $(this).prev().clone(true).insertAfter($(this).prev());
            // let tgtform = $(this).prev().clone().find();
            $("#female-groups").find("select[id*=female]").length;
            for(let i=0;i<$("#female-groups").find("select[id*=female]").length;i++){
                $("#female-groups").find("select[id*=female]").eq(i).val(0);
            }
            // $("#female-groups").find("select[id*=female]").eq(0).val(0);
            // $("#female-groups").find("select[id*=female]").eq(1).val(0);
        });

        //ボタンを押下するとselectboxが増える
        //idも増える
        $("#addSelect").on('click',function(){
            //始点はfemale-groupsとする
            //始点からのselectがいくつかあるかを調べる その数+1を新たなidとする
            $tmpid = $("#female-groups").find("select[id*=female]").length;
            //一つ前のselectをコピーする
            // let div = $(this).prev().parent().find("select[id*=female]").eq(0).clone(true).attr('id','female'+($tmpid+1)).attr('name','female-group'+($tmpid+1));
            let div = $(this).prev().parent().find("div[id$=female-group]").first().clone(true).attr('id','female-group'+($tmpid));
            div.appendTo($('#female-groups'));
        });

        $('#female-group').change(function(){
            alert("female-groupが選択されました！");
        });

        $('#female-group1').change(function(){
            alert("female-group1が選択されました！");
        });

        $("[id*=female-group]").change(function(){
            // alert('Hello World!');
            console.log($(this).val());
        });


    });
    </script>
</head>
<body>
    <div class="wrap">
        <div class="content">
            <div id="female-groups">
                <div id="female-group">
                    <select name="female" id="female" style="font-size:20px;margin-bottom:35px;">
                        <option value="0">---</option>
                        <option value="1">馬場典子</option>
                        <option value="2">宇垣美里</option>
                        <option value="3">相場詩織</option>
                    </select>
                </div>
                <div id="female-group1">
                    <select name="female1" id="female1" style="font-size:20px;margin-bottom:35px;">
                        <option value="0">---</option>
                        <option value="1">馬場典子</option>
                        <option value="2">宇垣美里</option>
                        <option value="3">相場詩織</option>
                    </select>
                </div>
            </div>
            <input type="button" value="セレクトボックス追加" id="addSelect">
            <input type="button" value="初期化" id="initialSelect">
        </div>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
</body>
</html>