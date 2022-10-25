<?php
$arrayCookie = array();
     foreach ($_POST as $key => $value) {
         if ($key != 'numeroVervos' && $key != 'numeroCasillas') {
                $arrayCookie[$key] = $value;
         }
     }
        setcookie('arrayCookie', serialize($arrayCookie), time() + 3600);   
        
?>
<form name="example" action="game.php" method="post">
  <?php
    echo "<input type='hidden' name='numeroVervos' value='".$_POST['numeroVervos']."'>";
    echo "<input type='hidden' name='numeroCasillas' value='".$_POST['numeroCasillas']."'>";
    ?>
  <input type="submit" value="Submit!">
</form>
<script type="text/javascript">
  document.querySelector("input[type='submit']").click();
</script>