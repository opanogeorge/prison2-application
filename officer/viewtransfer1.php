<html>
<head>
  <title>View transfer record  OFFICER </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='GREEN' width='900' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="transfer";

$con=mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con,'prisonpro')or die("cannot connect");

$sel= mysqli_query($con,"SELECT * FROM $tbl_name ORDER BY National_id DESC LIMIT 0,7");
echo"<table align='center'bgcolor='GREEN' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>PRISONER TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='10%'>".$row ['File_num']."</td>";
echo  "<td width='7%'>".$row ['From_prison']."</td>";
echo  "<td width='10%'>".$row ['To_prison']."</td>";
echo  "<td width='10%'>".$row ['Dateoftransfer']. "</td>";
echo '<td width="3%"><b><a href="deletetransfer1.php?id=' . $row['National_id'] . '"></a></font></b></td>';

echo "</tr>";
}
echo"</table>";
?>


<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='GREEN'><a href="officerpanel.php" target="_parent">Officer Panel<b></b></a>
			</td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='GREY' height='1'>
					<?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>