<h1>
    <a id = "next_last" href=<?php echo $last.".php";?> class="left_link">
        <?php
            echo "◀ "."<b>".$last."</b>";
            curl_setopt($ch,CURLOPT_URL,"https://www.mercadobitcoin.net/api/".$last."/ticker/");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

            $data = curl_exec($ch);
            $data = json_decode($data, true);
            $data = $data['ticker']['last'];

            echo " R$".money_format("%!.2n",$data);
        ?>
    </a>
    <?php
        if ($page == "LTC"){echo "Litecoin";}
        if ($page == "BTC"){echo "Bitcoin";}
        if ($page == "BCH"){echo "BTC cash";}
    ?>
    <a id = "next_last" href=<?php echo $next.".php";?> class="right_link" class="links">
        <?php
            curl_setopt($ch,CURLOPT_URL,"https://www.mercadobitcoin.net/api/".$next."/ticker/");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

            $data = curl_exec($ch);
            $data = json_decode($data, true);
            $data = $data['ticker']['last'];

            echo "R$".money_format("%!.2n",$data)." <b>".$next."</b>"." ▶";
        ?>
    </a>
</h1>
