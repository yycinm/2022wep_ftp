<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{background-color: green;}
    </style>
</head>
<body>
    <?php
      echo "test555";
      $string = "bravo my life";

      echo $string;

      $num = 90;
      echo $num

    ?>
    <h1>나의 수학점수</h1>
    <?php
    if($num == 100){
        ?>
       <div class="box">
       나의 수학점수는 100점 
       </div>
       <?php
    }else{?>
    <div class="box">
        나의 수학점수는 <?php echo $num ?>점 입니다.</div>
        <?php }?>
    

  
</body>
</html>