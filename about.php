<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="js.js"></script>
</head>
<body>
<?php
$AmountStars = $_POST['value'];
if($AmountStars < 0){
    echo 'не може бути відьємне число зірок!';
    exit();
}
if($AmountStars > 100){
    echo 'зірок не може бути більше 100';
    exit();
}

$star='<div class="star">.</div>';

@$checkbox= $_POST['checkbox'];
?>
<?php if ($checkbox == true): ?>
<div id="moon">.<?php for($i=1; $i<=$AmountStars;$i++){
        $x=rand(10,1000);
        $y=rand(10,1500);
        generation($x,$y, $i);
    //echo $star;
    }?></div>


<?php else:?>
<div id="month">(<?php for($i=1; $i<=$AmountStars;$i++){
    $x=rand(10,1000);
    $y=rand(10,1600);
    generation($x,$y, $i);
   // echo  $star;
    }?></div>
<?php endif; ?>

<?php
function generation($cordX,$cordY,$iteration) {
    echo "<div class=\"star\" style=\"position: absolute;top: {$cordX}px;left: {$cordY}px; z-index: {$iteration}\">.</div>";
}

?>





</body>
</html>
