<?php
setcookie('username', "", time()-3600*24*7, "/crazymath");
setcookie('score', $_SESSION['score'], time()-3600*24*7, "/crazymath");
setcookie('playtime', date('d/m/Y H:i'), time()-3600*24*7, "/crazymath");
header("Location: index.php");
?>