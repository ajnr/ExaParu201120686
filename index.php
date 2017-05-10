<!DOCTYPE html>
 <html>
 <body>
 <div name="top" align="center">
 	<img border-style:solid; src="images/arriba.png" width="1000" height="200"/>
 </div>
 <div name="middle" align="center">
 
 <table>
 
	<tr>
		<th style="font-size:24px;" align="left">For data scientists</th>
		<th style="font-size:24px;" align="left">For IT professionals</th>
	</tr>
 
 <tr>
 
<td> 
<table border-style:solid;>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<?php
			while($row=$result->fetch_assoc()){
				if(($row['codigo_servicio']=='0001') || ($row['codigo_servicio']=='0002') || ($row['codigo_servicio']=='0003')){
				?>
				<tr width="400" height="100">
					<td width="90" height ="90"> <img src='<?php echo $row['imagen_servicio']?>'> </td>
      				<td width="300"> <strong> <?php echo $row['nombre_servicio']?> </strong> <br><br> 
      				<?php echo $row['descripcion_servicio']?></td>
				</tr>
		
				<?php
				}
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
</td>	  

<td>
<table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<?php
			while($row=$result->fetch_assoc()){
				if(($row['codigo_servicio']=='0004') || ($row['codigo_servicio']=='0005') || ($row['codigo_servicio']=='0006')){
				?>
				<tr width="400" height="100">
					<td width="90" height ="90"> <img src='<?php echo $row['imagen_servicio']?>'> </td>
      				<td width="300"> <strong> <?php echo $row['nombre_servicio']?> </strong> <br><br> 
      				<?php echo $row['descripcion_servicio']?></td>
				</tr>
				<?php
				}
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
</td>

</tr>
</table>

	 </div>
 <div name="bottom" align="center">
 	<img src="images/abajo.png" width="900" height="200"/>
 </div>
  
 </body>
 </html>