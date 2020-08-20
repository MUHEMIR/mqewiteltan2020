<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=UNSPEC-TAN.xls");

?>

<table border="1">

<tr>
		  <th><strong>No.</strong></th>		
          <th><strong>DATEL</strong></th>
          <th><strong>STO</strong></th>          
          <th><strong>ODP</strong></th>
					<th><strong>TICKET PROMAN</strong></th>
					<th><strong>NOMOR INTERNET</strong></th>
					<th><strong>TICKET UNDERSPEC</strong></th>
					<th><strong>KODE LABOR</strong></th>
					<th><strong>REDAMAN AWAL</strong></th>
					<th><strong>REDAMAN AKHIR</strong></th>
					<th><strong>ODP REAL</strong></th>
					<th><strong>PORT ODP REAL</strong></th>
					<th><strong>OMSET</strong></th>
					<th><strong>KETERANGAN</strong></th>
					<th><strong>DETAIL</strong></th>
					<th><strong>TANGGAL</strong></th>
					</tr>

					<?php 
		
		$koneksi = mysqli_connect("localhost","root","","monyerah");

		
		$data = mysqli_query($koneksi,"SELECT * FROM toy ");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['datel']; ?></td>
			<td><?php echo $d['sto']; ?></td>
			<td><?php echo $d['odp']; ?></td>
			<td><?php echo $d['tproman']; ?></td>
			<td><?php echo $d['nticket']; ?></td>
			<td><?php echo $d['tunderspec']; ?></td>
			<td><?php echo $d['klabor']; ?></td>
			<td><?php echo $d['rawal']; ?></td>
			<td><?php echo $d['rakhir']; ?></td>
			<td><?php echo $d['odpre']; ?></td>
			<td><?php echo $d['podpr']; ?></td>
			<td><?php echo $d['oms']; ?></td>
			<td><?php echo $d['ket']; ?></td>
			<td><?php echo $d['detail']; ?></td>
			<td><?php echo $d['tgl']; ?></td>
		</tr>
		<?php 
		}
		?>

</table>