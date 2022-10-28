<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceApp</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>FaceApp</h1>

    <form action="" method="post">
        <label for="size">Select Photo Size:</label>
        <input type="range" name="size" id="size" min="10" max="100" step="10" value="60">
        <br>
        <label for="Colorset">Select Border Color:</label>
        <input type="color" name="Colorset" id="Colorset">
        <br>
        <button type="submit" name="Process">Process</button>
        <br><br>
       
        <?php if (isset($_POST['Process'])) : ?>
            <?php 
                $size = $_POST ['size'];
                $border = $_POST ['Colorset'];
            ?>
        <?php endif; ?> 
        <img src="try.jpg" alt="" width="<?php echo $size; ?>" border= " 5px solid" style="color: <?php echo $border; ?>">
    </form>
</body>
</html>