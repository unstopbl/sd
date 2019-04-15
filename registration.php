<?php

include "DB.php";

?>
<!doctype html>
<html lang="en">
<link>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link href="RegPageStyle.css" rel="">
</head>
<body>
<form method="post" action="index.php">
    Login: <input id="login" type="text" name="login"/> <br/>
    Password: <input id="pass" type="password" name="password"/> <br/>
    Verification: <input id="ver_pass" type="password" name="VerifPass"/> <br/>
    Email: <input id="mail" type="text" name="mail"/> <br/>
    <input type="submit" name="Поiхали" value="Поiхали">
</form>
</body>
</html>
