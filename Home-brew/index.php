<?php
$path = "./widgets/";
$nav  = $path."nav.php";
$main = $path."main.php";
$footer = $path."footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Brew | Mati City</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="container">

    <div class="header">
      <?php include($nav)?>
   </div>

    <div class="main">
      <?php include($main)?>
    </div>


    <div class="footer">
      <?php include($footer) ?>
    </div>
    
  </div>

  <script src="script.js"></script>
</body>

</html>