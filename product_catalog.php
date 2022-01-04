<html>
<head>
    <title><?php echo $title;?></title>
</head>
<body>
   <h1>Merek - Merek Hp</h1> 
   <?php
$handphone = array('1'=>'Iphone', 
			'Samsung', 
			'Xiaomi' , 
			'Oppo' , 
			'Vivo', 
			'Realme', 
			'Asus', 
			'Lenovo', 
			'Huawei', 
			'Infinix', 
			'Advan', 
			'Sony'
		);
$batas_waktu = '2015-11-10';
echo '<table>
		<tr>
			<th>Handphone</th>
			<th>Keterangan</th>
		</tr>';
for ($i = 1; $i <= count($handphone); $i++)
{	
	$bln_batas = date("m",strtotime($batas_waktu));
	echo '<tr>
			<td> ' . strtoupper($handphone[$i]) . ' </td>';
		
	if ($bln_batas == $i)
		echo '<td>- Batas waktu diskon 1 Februari 2022</td>';
	else
		echo '<td>- Batas waktu diskon 1 februari 2022</td>';
		
	echo '</tr>';
}

echo '</table>';
?>
   <!-- tampilkan data product disini dengan perulangan dan di dalam tabel -->
</body>
</html>