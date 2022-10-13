<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="js.js"></script>
</head>
<body>
<?php if (@$_POST['submit']===null): ?>
<form method="post" action="index.php">
    <label class="switch">
        <input type="checkbox" name="checkbox" value="true">
        <span class="slider round"></span>
    </label>
    <br>
    <span>
    <span class="square" onclick="decrement()">-</span>
    <input type="text" name="value" value="0" id="value">
    <span class="square" onclick="increment()">+</span>
    </span>
    <br>
    <br>
    <button type="submit" id="button" name="submit">Відправити</button>

</form>
<?php else: ?>
  <?php require ('about.php')?>
<?php endif; ?>
<script>
    let n = 0;

    const updatePage = () => {
        const el = document.getElementById('value').value = n;
        el.innerHTML = n;
        console.log(el);
    };

    const increment = () => {
        n += 1;
        updatePage();
    };

    const decrement = () => {
        n -= 1;
        updatePage();
    };
    if(n <0 ){
        alert("не може бути відьємне число зірок!")
    }
    if(n > 100){
        alert("зірок не може бути більше 100")
    }
</script>

<?php

?>
</body>
</html>
