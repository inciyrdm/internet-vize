<html>
<body>

<?php
   echo 'YemekAdı: ' . htmlspecialchars($_POST['firstname']) . '<br/>';
   echo 'menu: ' . htmlspecialchars($_POST['menu']) . '<br/>';
   echo 'tarif: ' . htmlspecialchars($_POST['tarif']);
?>

</body>
</html>