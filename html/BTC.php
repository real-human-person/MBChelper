<html>
    <head>
	<title>
            <?php
                $page = "BTC";
                $last = "LTC";
                $next = "BCH";
                include "title.php";
            ?>
	</title>
        <?php include "head_common.php";?>
    </head>
	<body>
            <?php
                echo "<div id = \"heading\"><div id = \"head\">";
		include "header.php";
		include "ticker.php";
                echo "</div></div>";
                echo "<div id=\"orderbooks\">";
                include "orderbook.php";
                include "tradebook.php";
                echo "</div>";
            ?>
	</body>
</html>
