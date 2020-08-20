
<?php

	require_once("perpage.php");	
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$datel = "";
	$sto = "";
	$nticket = "";
	$odp = "";
	$klabor = "";
	$tgl = "";
	
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("datel","sto","nticket","odp","klabor","tgl");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {

					case "datel":
						$datel = $v;
						$queryCondition .= "datel LIKE '" . $v . "%'";
						break;

					case "sto":
						$sto = $v;
						$queryCondition .= "sto LIKE '" . $v . "%'";
						break;
					
						case "odp":
							$odp = $v;
							$queryCondition .= "odp LIKE '" . $v . "%'";
							break;

					case "nticket":
						$nticket = $v;
						$queryCondition .= "nticket LIKE '" . $v . "%'";
						break;

					case "klabor":
						$klabor = $v;
						$queryCondition .= "klabor LIKE '" . $v . "%'";
						break;
					
					case "tgl":
					$tgl = $v;
					$queryCondition .= "tgl LIKE '" . $v . "%'";
					break;
					
				}
			}
		}
	}
	$orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM toy " . $queryCondition;
	$href = 'index.php';					
		
	$perPage = 30; 
	$page = 1;
	if(isset($_POST['page'])){
		$page = $_POST['page'];
	}
	$start = ($page-1)*$perPage;
	if($start < 0) $start = 0;
		
	$query =  $sql . $orderby .  " limit " . $start . "," . $perPage; 
	$result = $db_handle->runQuery($query);
	
	if(!empty($result)) {
		$result["perpage"] = showperpage($sql, $perPage, $href);
	}
?>

<html>
	
	<head>
	<meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proman Unspec Witel Tangerang</title>
	
	</head>
	<body>
	<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="">
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link href="style.css" type="text/css" rel="stylesheet" />
	
		<h2>Proman Unspec Witel Tangerang</h2>
		
		<div style="text-align:right;margin:20px 0px 10px;">
		<a id="btnAddAction" href="functionexport.php" >Export</a>
		<a id="btnAddAction" href="add.php">Add New</a>
		</div>

    <div id="toys-grid">      
			<form name="frmSearch" method="post" action="index.php">
			<div class="search-box">
			<p><input type="text" placeholder="DATEL" name="search[datel]" class="demoInputBox" value="<?php echo $datel; ?>"	/>
			<input type="text" placeholder="SEKTOR" name="search[sto]" class="demoInputBox" value="<?php echo $sto; ?>"	/>
			<input type="text" placeholder="ODP" name="search[odp]" class="demoInputBox" value="<?php echo $odp; ?>"	/>
			<input type="text" placeholder="NOMOR INTERNET" name="search[nticket]" class="demoInputBox" value="<?php echo $nticket; ?>"/>
			<input type="text" placeholder="KODE LABOR" name="search[klabor]" class="demoInputBox" value="<?php echo $klabor; ?>"	/>
			<input type="date" name="search[tgl]" class="demoInputBox" value="<?php echo $tgl; ?>"	/>
			<input type="submit" name="go" class="btnSearch" value="Search">
			<input type="reset" class="btnSearch" value="Reset" onclick="window.location='index.php'"></p>
			</div>
			
			<table cellpadding="10" cellspacing="1">
        <thead>
					<tr>
					<th><strong>No</strong></th>
          <th><strong>DATEL</strong></th>
          <th><strong>SEKTOR</strong></th>          
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
				</thead>
				<tbody>
					<?php
					$no=1;
					if(!empty($result)) {
						foreach($result as $k=>$v) {
						  if(is_numeric($k)) {
					?>
          <tr>
					<td><?php echo ".$no."; ?></td>
					<td><?php echo $result[$k]["datel"]; ?></td>
          			<td><?php echo $result[$k]["sto"]; ?></td>
					<td><?php echo $result[$k]["odp"]; ?></td>
					<td><?php echo $result[$k]["nticket"]; ?></td>
					<td><?php echo $result[$k]["tproman"]; ?></td>
					<td><?php echo $result[$k]["tunderspec"]; ?></td> 
					<td><?php echo $result[$k]["klabor"]; ?></td>
					<td><?php echo $result[$k]["rawal"]; ?></td>
					<td><?php echo $result[$k]["rakhir"]; ?></td>
					<td><?php echo $result[$k]["odpre"]; ?></td>
					<td><?php echo $result[$k]["podpr"]; ?></td>
					<td><?php echo $result[$k]["oms"]; ?></td>
					<td><?php echo $result[$k]["ket"]; ?></td>
					<td><?php echo $result[$k]["detail"]; ?></td>
					<td><?php echo $result[$k]["tgl"]; ?></td>
					
					<td>
					<a class="btnEditAction" href="edit.php?id=<?php echo $result[$k]["id"]; ?>">Edit</a> <a class="btnDeleteAction" href="delete.php?action=delete&id=<?php echo $result[$k]["id"]; ?>">Delete</a>
					</td>
					</tr>
					<?php $no++;
					
						  }
					   }
                    }
					if(isset($result["perpage"])) {
					?>
					<tr>
					<td colspan="6" align=right> <?php echo $result["perpage"]; ?></td>
					</tr>
					<?php  } ?>
				<tbody>
			</table>
			</form>
			
		</div>
		<script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
	</body>
	
</html>