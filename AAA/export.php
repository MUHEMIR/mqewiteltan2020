<?php
    include "dbcontroller.php";    
?>
<head>

<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	</head>



<form>
  <div class="form-group row">
    <label for="datel" class="col-sm-2 col-form-label">DATEL</label>
    <div class="col-sm-3">
    
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cpa"><i class="fa fa-print"></i> CPA </button>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#psr"><i class="fa fa-print"></i> PSR </button>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#lkg"><i class="fa fa-print"></i> LKG </button>


  </div>
    </div>

    

</form>


<!-- Modal CPA -->
<div class="modal fade" id="cpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CPA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
<label>Tanggal</label> 

<input type="date" name="tgl2" id="tgl2" class="demoInputBox">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary btn-sm" type="button" href="functionexport.php" target="_blank" value="Export">
        
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Modal PSR -->
<div class="modal fade" id="psr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PSR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
<label>Tanggal</label> 
<input type="date" name="tgl" id="tgl" class="demoInputBox">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Export</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal LKG -->
<div class="modal fade" id="lkg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LKG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
<label>Tanggal</label> 

<input type="date" name="tgl" id="tgl" class="demoInputBox">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Export</button>
      </div>
    </div>
  </div>
</div>

   <!-- JavaScript -->
   <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/dataTables/datatables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#datatables').DataTable();
      });
    </script>
    