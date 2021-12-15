<?php 
	$pagesize = 80;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$startpage = ($page-1)*$pagesize;
	require_once("./conn.php");
	$sql = "SELECT * FROM employees";
	$result = mysqli_query($link,$sql);
	$records = mysqli_num_rows($result);
	$pages = ceil($records/$pagesize);
	$sql.=" LIMIT $startpage,$pagesize";
	$result = mysqli_query($link,$sql);
	$arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style type="text/css">
 		.pagelist a{padding:3px 10px; border: 1px solid #ccc;margin: 3px 10px;text-decoration:none; }
 		.pagelist span{padding:3px 10px; border: 1px solid #c33;margin: 3px 10px;}
 		.pagelist a:hover{padding:3px 10px; border: 1px solid #cccc;margin: 3px 10px;text-decoration:none; background: #ccc33}
 	</style>
 </head>
 <body>
 	<table width="800" border="1" cellspacing="0">
 		<tr>
 			<th>employee_id</th>
 			<th>first_name</th>
 			<th>last_name</th>
 			<th>email</th>
 			<th>phone_number</th>
 			<th>job_id</th>
 			<th>salary</th>
 			<th>commission_pct</th>
 			<th>manager_id</th>
 			<th>department_id</th>
 			<th>hiredate</th>
 		</tr>
 			<?php 
		 			foreach ($arr as $key => $arr1) 
					{
						echo "<tr>";
					foreach ($arr1 as $key => $value) 
					{
						echo "<td>$value</td>";
					}
						echo "</tr>";
					}
 			 ?>	
 			 <tr>
 			 	<td align="center" colspan="11" height="50" class="pagelist">
 			 	<?php 
 			 	if ($pages<10) 
 			 	{
 			 		$start=1;
 			 		$end=$pages;
 			 	}
 			 	else
 			 	{
	 			 	if ($page<6) 
	 			 	{
	 			 		$start=1;
	 			 		$end=10;
	 			 	}
	 			 	elseif ($page>6) 
	 			 	{
	 			 		$start=$page-5;
	 			 		$end=$page+4;
	 			 		if($end>$pages) 
	 			 		{
	 			 			$start=$pages-9;
	 			 			$end=$pages;
	 			 		}
	 			 	}
	 			 }
 			 		for ($i=$start; $i <= $end; $i++) 
 			 		{ 
 			 			if ($i==$page) 
 			 			{
 			 				echo "<span>$i</span>";
 			 			}
 			 			else
 			 			{
 			 				echo "<a href='?page=$i'>$i</a>";
 			 			}
 			 		}
 			 	 ?> 			 	
 			 	</td>
 			 </tr>

 	</table>


 </body>
 </html>