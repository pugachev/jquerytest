<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <script>
        $(function() {
            
            $('input[name=bijyo]').on('change', function(){
                /// チェックされたvalue値を配列として取得
                if($(this).val()==3){
                    // let tmp = $('input[name=bijyo]:checked').map(function(){
                    //     return $(this).val();
                    // }).get();
                    // tmp.splice(tmp.indexOf(3));
                    // console.log($.isArray(　'3',tmp));
                    // const aaa = [ 1, 15, 30, 45, 60, 75 ];
                    // console.log(aaa.indexOf(30));

                        let chk_status = $("input[value=3]").prop("checked");
                        if(chk_status){
                            tmp=[0,1,2];
                            tmp.forEach(function(elem,index){
                                $('input[value='+elem+']').prop('disabled',true);
                                $('input[value='+elem+']').prop('checked',false);
                                console.log(elem+'     '+index)
                            });
                        }else{
                            tmp=[0,1,2];
                            tmp.forEach(function(elem,index){
                                $('input[value='+elem+']').prop('disabled',false);
                                $('input[value='+elem+']').prop('checked',false);
                                console.log(elem+'     '+index)
                            });
                        }
                }
            });
        });
    </script>
</head>
<body>
    <div>
        <input type="checkbox" name="bijyo" value="0"> 相場詩織
        <input type="checkbox" name="bijyo" value="1"> 小澤陽子
        <input type="checkbox" name="bijyo" value="2"> 馬場典子
        <input type="checkbox" name="bijyo" value="3"> 荒川みなみ
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
</body>
</html>