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

        $("#addSelect").on('click',function(){
            // $(this).prev().clone(true).appendTo("#tgt");
            $(this).prev().clone(true).insertAfter($(this).prev());
            let tgtform = $(this).prev().clone().find();
        });

    });
    </script>
</head>
<body>
    <div class="wrap">
        <div class="content">
            <div id="female-groups">
                <div id="female-group">
                    <select id="female2" name="female" style="width:100px;height: 30px;">
                        <?php foreach($result as $data): ?>
                            <option value="<?php echo $data['femalenumber'] ?>"><?php echo $data['femalename'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <input type="button" value="+" id="addSelect">
        </div>
        <div id="tgt"></div>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
</body>
</html>