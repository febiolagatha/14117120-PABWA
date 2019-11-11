<?php setcookie("test_cookie","test", time() + 3600,'/'); ?>
<html>
<body>
<?php if(count($_COOKIE) > 0 ) {
    echo "Cokkies enable.";
} else {
    echo " Cokkies disabled.";
} ?>
<!-- analisis disini -->
</body>
</html>
