<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบเก็บคะแนนครั้งที่ 1</title>
</head>
<body>
<?php
    $salary = 40000 ;
    
    echo "เงินเดือน = ". $salary. "     บาท <br> ";
    echo "--------------------------------<br>";
    if($salary<50000){
        $bonus = ($salary * 300)/100;
    }
    else if($salary<100000){
        $bonus = ($salary * 200)/100;
    }
    else {
        $bonus = ($salary * 100)/100;
    }
    echo "ได้รับโบนัส = " .$bonus."  บาท <br>";
    echo "เงินเดือนสุทธิ = " .($bonus + $salary)."        บาท <br>";
    echo "--------------------------------<br>";
?>
    
</body>
</html>