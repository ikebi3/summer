<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>test</title>
  <link rel="stylesheet" type="text/css" href="css/test.css">
</head>
  <body class="arrange01">
    <div>
      <font>こんにちは</font>

      <form method="get">
        <?php
          if(isset($_GET['ringo'])) {
            $apple = $_GET['ringo'];
            /*$apple = htmlspecialchars($_GET['ringo']);*/
          } else {
            $apple='aaa';
          }
        ?>
        <input type="text" name="ringo" value="<?php print $apple?>">
        <input type="submit" value="send">
      </form>
    </div>
  </body>
</hmtl>

<!--
  xss攻撃
  "><script>alert("ttt");</script><"
-->
