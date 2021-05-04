<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assest/style.css" rel="stylesheet">
</head>
    <title>Redirection | إعادة توجيه</title>
</head>
<body>
<!-- PHP -->   
<?php
require('redirect.php')
?>
<!-- END PHP -->

<!-- POST -->
<div id="page" class="page">
<form class="search-wrapper cf" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input name="redirect" type="text" placeholder="أدخل رقم الاختصار..." required style="box-shadow: none">
        <button type="submit">إعادة توجيه</button>
        </form>       
<!-- END POST -->

<!-- FOOTER -->
<p class="footer-heart">
  Made with <g-emoji class="g-emoji" alias="heart" fallback-src="https://media3.giphy.com/media/uVj6TL39GQ0T4oZ6vO/giphy.gif?cid=790b76113382df0694475222e453d9743bfd5a95d8e27874&rid=giphy.gif">
<img class="emoji" alt="heart" height="20" width="20" src="https://media3.giphy.com/media/uVj6TL39GQ0T4oZ6vO/giphy.gif?cid=790b76113382df0694475222e453d9743bfd5a95d8e27874&rid=giphy.gif"></g-emoji> by <a href="https://github.com/fzrael">ARAR</a>
</p>
<!-- END FOOTER -->

</div>
</body>
</html>
