<div id = "tradebook">

		<div id="table_title">TRADEBOOK<button type="button" onclick="document.getElementById('tradebook').style.display='none'; document.getElementById('orderbook').style.display='block';" id="navNxt" class="right_link">•••</button></div>
		<table id = "data_tables" class="tradebook" cellspacing="0" cellpadding="0" border="1" bordercolor = "black">
					<tr>
						<th class="hide1">TxID</th>
						<th class="hide2">DATE</th>
						<th>PRICE</th>
						<th>QTY</th>
						<th>TYPE</th>
					</tr>
			<?php
				curl_setopt($ch,CURLOPT_URL,"https://www.mercadobitcoin.net/api/".$page."/trades/");
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				$data = curl_exec($ch);
				$data = json_decode($data, true);
				$trades = count($data);
               
				for ($i = 1; $i <= $trades; $i++){
                   
                    echo sprintf(
					"<tr><td id=\"data\" class=\"hide1\"><div style=\"text-align:center;\">%s</div></td>
					<td id=\"data\" style=\"text-align:center;\" class=\"hide2\">%s</td>
					<td id=\"data\">R$<div id=\"aligned\">%s</div></td>
					<td id=\"data\"><div id = \"aligned\">%12.5f</div></td>"
					, $data[$trades-$i]["tid"], date("m.d.y-H:i:s",$data[$trades-$i]["date"])
					,money_format('%!=*#7.5n',$data[$trades-$i]["price"]),$data[$trades-$i]["amount"]);
                    
					if($data[$trades-$i]["type"] == "buy"){
						echo "<td id=\"data\" style=\"text-align:center; color:green;font-weight:bold;\">BUY";
					}
					else{
						echo "<td id=\"data\" style=\"text-align:center; color:red;font-weight:bold;\">SELL";
					}
					//echo mb_strtoupper($data[$trades-$i]["type"]);
					echo "</td></tr>";
                }
				curl_close($ch);
			?>
		</table>
</div>
