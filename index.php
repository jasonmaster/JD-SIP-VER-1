<?php
$e = $_GET['e'];

?>
<center>
	<h1>Jay-Designs SMS Platform (*testing*)</h1> <br />
	<h3>*USA ONLY* MORE COUNTRIES ARE COMING SOON</h3>
	<br />
	Jay-Designs SMS Mobile Numbers Are Coming Soon.
	<br />
	<form id="sms" name="sms" method="post" action="scripts/sms.php">
	<table width="400">
		<tr>
	   	<?php
	   			
				if($e =="s"){
					echo "Your Message has been Sent<br /> thank you";
				} 
				if($e =="e"){
						echo "ERROR : fill in all the fields";
				}
		?>
	  	</tr>
		<tr>
	  <tr>
	    <td align="right" valign="top">To:</td>
	    <td align="left"><input name="to" type="text" id="to" size="30" /></td>
	  </tr>
	  <tr>
	    <td align="right" valign="top">Carrier:</td>
	    <td align="left">
			<select name="carrier" id="carrier">
		  <option value="att">AT&amp;T</option>
	      <option value="verizon">Verizon</option>
	      <option value="tmobile">T-Mobile</option>
		  <option value="sprint">Sprint</option>
		  <option  value="virgin">Virgin Mobile</option>
	    </select></td>
	  </tr>
	  <tr>
	    <td align="right" valign="top">Message:</td>
	    <td align="left"><textarea name="message" cols="40" rows="5" id="message"></textarea></td>
	  </tr>
	  <tr>
	    <td colspan="2" align="right"><input type="submit" name="Submit" value="Submit" /></td>
	    </tr>
	</table>
	</form>

</center>