<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["submit"])) {
    $query = "INSERT INTO toy(datel, sto, odp, tproman, nticket, tunderspec, 
	klabor, rawal, rakhir, odpre, podpr, oms, ket, detail, tgl) VALUES('".$_POST["datel"]."','".$_POST["sto"]."',
	'".$_POST["odp"]."','".$_POST["tproman"]."','".$_POST["nticket"]."','".$_POST["tunderspec"]."',
	'".$_POST["klabor"]."','".$_POST["rawal"]."','".$_POST["rakhir"]."','".$_POST["odpre"]."',
	'".$_POST["podpr"]."','".$_POST["oms"]."','".$_POST["ket"]."','".$_POST["detail"]."','".$_POST["tgl"]."')";
        $result = $db_handle->executeQuery($query);
    if(!$result){
			$message="Problem in Adding to database. Please Retry.";
	} else {
		header("Location:index.php");
	}
}
?>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function validate() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#datel").val()) {
		$("#datel-info").html("(required)");
		$("#datel").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#sto").val()) {
		$("#sto-info").html("(required)");
		$("#sto").css('background-color','#FFFFDF');
		valid = false;
	}

	if(!$("#odp").val()) {
		$("#odp-info").html("(required)");
		$("#odp_count").css('background-color','#FFFFDF');
		valid = false;
	}

	if(!$("#tproman").val()) {
		$("#tproman-info").html("(required)");
		$("#tproman").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#nticket").val()) {
		$("#nticket-info").html("(required)");
		$("#nticket").css('background-color','#FFFFDF');
		valid = false;
	}

	if(!$("#tunderspec").val()) {
		$("#tunderspec-info").html("(required)");
		$("#tunderspec").css('background-color','#FFFFDF');
		valid = false;
	}	

		
	return valid;
}
</script>
<title>Tambah</title>

<div>
<a id="btnAddAction" href="index.php">Kembali</a> <br>
</div>

<form name="frmToy" method="post" action="" id="frmToy" onClick="return validate();">

<div id="mail-status"></div>

<div>
<label for="datel" style="padding-top:20px;">DATEL</label>
                    <select class="form-control" id="datel" name="datel">
                    <option>CPA</option>
                    <option>PSR</option>
                    <option>LKG</option>
                    </select>
                    
<span id="datel-info" class="info"></span><br/>
</div>

<div>

<label for="sto" style="padding-top:20px;">SEKTOR</label>
                            
							<select class="form-control" id="sto" name="sto">
							<option>CILEDUG 1</option>
							<option>CILEDUG 2</option>
							<option>CIPUTAT 1</option>
							<option>CIPUTAT 2</option>
							<option>CIPUTAT 3</option>
							<option>CIPUTAT 4</option>
							<option>CIPUTAT 5</option>
							<option>PONDOK AREN</option>
							<option>PAKULONAN</option>
							<option>CIPONDOH 1</option>
							<option>CIPONDOH 2</option>
							<option>GANDASARI 1</option>
							<option>GANDASARI 2</option>
							<option>KROJO</option>
							<option>PASAR KEMIS 1</option>
							<option>PASAR KEMIS 2</option>
							<option>SEPATAN</option>
							<option>TANGERANG 1</option>
							<option>TANGERANG 2</option>
							<option>CURUG</option>
							<option>LEGOK 1</option>
							<option>LEGOK 2</option>
							<option>LEGOK 3</option>
							<option>LENGKONG 1</option>
							<option>LENGKONG 2</option>
							<option>SERPONG 1</option>
							<option>SERPONG 2</option>
					</select>
<span id="sto-info" class="info"></span><br/>
</div>

<div>
<label>ODP</label> 
<span id="odp-info" class="info"></span><br/>
<input type="text" name="odp" id="odp" class="demoInputBox">
</div>

<div>
<label>TICKET PROMAN</label> 
<span id="tproman-info" class="info"></span><br/>
<input type="text" name="tproman" id="tproman" class="demoInputBox">
</div>

<div>
<label>NOMOR INTERNET</label> 
<span id="nticket-info" class="info"></span><br/>
<input type="text" name="nticket" id="nticket" class="demoInputBox">
</div>

<div>
<label>TICKET UNDERSPEC</label> 
<span id="tunderspec-info" class="info"></span><br/>
<input type="text" name="tunderspec" id="tunderspec" class="demoInputBox">
</div>

<div>
<label>KODE LABOR</label> 
<br/>
<input type="text" name="klabor" id="klabor" class="demoInputBox">
</div>

<div>
<label>REDAMAN AWAL</label> 
<br/>
<input type="text" name="rawal" id="rawal" class="demoInputBox">
</div>

<div>
<label>REDAMAN AKHIR</label> 
<br/>
<input type="text" name="rakhir" id="rakhir" class="demoInputBox">
</div>

<div>
<label>ODP REAL</label> 
<br/>
<input type="text" name="odpre" id="odpre" class="demoInputBox">
</div>

<div>
<label>PORT ODP REAL</label> 
<br/>
<input type="text" name="podpr" id="podpr" class="demoInputBox">
</div>

<div>
<label>OMSET</label> 
<br/>
<input type="text" name="oms" id="oms" class="demoInputBox">
</div>

<div>
<label>KETERANGAN</label> 
<br/>
<input type="text" name="ket" id="ket" class="demoInputBox">
</div>

<div>
<label>DETAIL KONDISI LAPANGAN</label> 
<br/>
<input type="text" name="detail" id="detail" class="demoInputBox">
</div>

<div>
<label>TANGGAL</label> 
<input type="date" name="tgl" id="tgl" class="demoInputBox" required>
</div>


<input type="submit" name="submit" id="btnAddAction" value="Add" />
</div>


</div>