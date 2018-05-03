<!DOCTYPE html>
<?php
include'database.php';
$id = $_GET['id'];
$sql = "select * from contacts where ID='$id'";
$rows = $databas->query($sql) ;
$row= $rows->fetch_assoc();
if(isset($_POST['send'])){
$name = $_POST['Name'];
$num = $_POST['Number'];
$addd = $_POST['Address'];
$sql2= "update contacts set Name='$name',Address='$addd',Number='$num' where id ='$id'";
$databas->query($sql2);
header('location: index.php');
}
?>
<html>
	<head>
		<title><strong>Address Book</strong></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top: 70px">
				<center><h1>Update Contact</h1></center></br></br></br></br>
				<div class="col-md-10 col-md-offest-1">
					
					<table class="table">
						<hr><br>
						<form method="post">
							<div class="form-group">
								<label>Name</label>
								<input type="text" value="<?php echo $row['Name']; ?>" required name="Name" class="form-control">
							</div>
							<div class="form-group">
								<label>Number</label>
								<input type="text" value="<?php echo $row['Number']; ?>" required name="Number" class="form-control">
							</div>
							<div class="form-group">
								<label>Address</label>
								<input type="text" value="<?php echo $row['Address']; ?>" required name="Address" class="form-control">
							</div>
							<input type="submit" name="send" value="Update" class="btn btn-success">
						</form>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>