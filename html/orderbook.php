<!--<div id = "time"><?php echo "refreshed @ ".date ("H:i:s",time());?></div>-->

<div id = "orderbook">
		<div id="table_title">ORDERBOOK<button type="button" onclick="document.getElementById('orderbook').style.display='none'; document.getElementById('tradebook').style.display='block';"id="navNxt" class="right_link">•••</button></div>
        <table id = "data_tables" cellspacing="0" cellpadding="0" border="1" bordercolor = "black">
            <tr><th colspan="2">BIDS</th><th colspan="2">ASKS</th></tr>
            <?php
                curl_setopt($ch,CURLOPT_URL,"https://www.mercadobitcoin.net/api/".$page."/orderbook/");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

                $data = curl_exec($ch);
                $data = json_decode($data, true);
                $bids = count($data["bids"]);
                $asks = count($data["asks"]);

                if ($bids > $asks){
                $lower = $asks;
                $higher = $bids;
                }else{
                $lower = $bids;
                $higher = $asks;
                }
                for ($i = 0; $i<$higher; $i++){
                if(!$data["bids"][$i][0]){
                echo sprintf(
                "<tr><td id=\"data\"><div id=\"aligned\">%s</div></td>
                <td id=\"data\"><div id=\"aligned\">%s</div></td></td>"
                ,"---","---"
                );
                }


                else{
                echo sprintf(
                "<tr><td id=\"data\">R$<div id=\"aligned\">%s</div></td>
                <td id=\"data\"><div id=\"aligned\">%12.5f</div></td></td>"
                ,money_format('%!.5n',$data["bids"][$i][0]),$data["bids"][$i][1]
                );
                }


                if (!$data["asks"][$i][0]){
                echo sprintf(
                "<td id=\"data\"><div id=\"aligned\">%s</div></td>
                <td id=\"data\"><div id=\"aligned\">%s</div></td></td></tr>"
                ,"---","---"
                );
                }
                else{
                echo sprintf(
                "<td id=\"data\">R$<div id=\"aligned\">%s</div></td>
                <td id=\"data\"><div id=\"aligned\">%12.5f</div></td></td></tr>"
                ,money_format('%!.5n',$data["asks"][$i][0]),$data["asks"][$i][1]
                );
                }
                }
            ?>
        </table>
</div>
