<!-- Ecrivez un script qui affiche l'adresse IP du serveur et celle du client. -->
<html>

<body>
<?php
echo $_SERVER["REMOTE_ADDR"] . "<br>";
echo $_SERVER["SERVER_ADDR"] . "<br>";
?>
</body>

</html>

