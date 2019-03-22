<div class="container-fluid bg-dark">
    <h1 align="center" class="text-white"> © Charaf Tchi
    </h1>
</div>
<?php

require_once '../temp.php';
require_once '../uploadFiles/cnxDB.php';

$query1 = "SELECT file_name FROM imgs";

$result = mysqli_query($con,$query1);

//
if (mysqli_num_rows($result) != 0){
	$query1 = "SELECT  file_name,uploaed_on
	FROM  imgs 
	";
	$result = mysqli_query($con,$query1);
	//print_r(mysql_fetch_row($result));
	//
	while($row = mysqli_fetch_row($result)){
		//echo $row[0];
	echo "<br/>";
	echo "<br/>";
	//print_r(explode("|", $row[0]));
	$source = explode("|", $row[0]);
	//echo count($source);
	echo '<div class="container-fluid" align="center">
	';
	for($i = 0; $i < count($source); $i++){
		?>
	<div class="col-md-3">

	<div class="card">
  <div class="card-body bg-secondary font-weight-bold" align="center"">
    <p class="card-text"><?php echo "$source[$i]"; ?></p>
  </div>
  <?php echo "<img height='100%' width='100%' src='../uploadFiles/user_data/$source[$i]'/>"; ?>
  <div class="card-body bg-dark ">
    <p class="card-text text-white"><i class="fa fa-clock-o" aria-hidden="true"></i> Upload date 
 <?php echo $row[1]; ?></p>
  </div>
</div>
</div>
		
			
		<?php
		
		
	} ?>
	
	</div>
	<div class="container-fluid fixed-bottom ">
<div class="row">
<div class="col-md-3">
<a href="index.php" class="btn btn-success btn-block">
<i class="fa fa-arrow-left" aria-hidden="true"></i>
 Back</a>
</div>
<div class="col-md-6">
</div>
<div class="col-md-3">
<a href="../index.php" class="btn btn-info btn-block">
<i class="fa fa-home" aria-hidden="true"></i>
 Home</a>
</div>
</div>
</div>

	<?php 
	
} }else {
?>
<div class="container" align="center" style="margin-top:15%;">
<div align="center" class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="mr-auto"><i class="fa fa-bell" aria-hidden="true"></i>
 Notification </strong>
    <small><?php echo date("h:i a"); ?></small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
  <p class="text-warning font-weight-bold"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 There is no picture exists in the DB <i class="fa fa-exclamation" aria-hidden="true"></i>
 </p>
  </div>
</div>
</div>
	
<?php
}

?>