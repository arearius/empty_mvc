<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 06.10.2018
 * Time: 11:09
 */

?>

<html>
    <head>
        <title> <?= $title ?> </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/s/js/base.js"></script>
        <script src="/s/js/main.js"></script>
        <script src="/s/js/employee.js"></script>
        <link href="/s/css/index.css" rel="stylesheet">
    </head>
    <body>
        <div class="menu">
            <?php  echo $this->widget_menu() ?>
        </div>
        <div>Default view</div>
        <?php echo $html; ?>
    </body>
</html>