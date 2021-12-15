<?php 

	$filename = "http://flash.weather.com.cn/wmaps/xml/china.xml";

	$xml = simplexml_load_file($filename);
	var_dump($xml);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<?php foreach ($xml as $value) 
	{
		$city =(string)$value->attributes()->cityname;
		$tem1 =(string)$value->attributes()->tem1;
		$tem2 =(string)$value->attributes()->tem2;
		$weather = (string)$value->attributes()->stateDetailed;  ?>
 	<table style="text-align: center" width="500px" align="center" border="1px solid black" cellspacing="0">
 		<tr style="height: 50px;font-size: 40px"> 
 			<th><?php echo "$city"; ?></th>
 		</tr>
 		<tr>
 			<td>气温：
 				<?php echo "$tem1"; ?>°c-
 				<?php echo "$tem2"; ?>°c
 			</td>
 		</tr>
 		<tr>
 			<td>天气：
 				<?php echo "$weather"; ?>

 			</td>
 		</tr>
 	</table>
 <?php }?>

 </body>
 </html>