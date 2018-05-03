<!DOCTYPE html>
<?php include'database.php';
$sql = "select * from contacts";
$rows = $databas->query($sql) ;
?>
<html>
	<head>
		<title>Address Book</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top: 70px">
				<center><h1>Simple Address Book</h1></center></br></br></br></br>
				<div class="col-md-10 col-md-offest-1">
					
					<table class="table">
						<button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal" style="background-color: #C0C0C0 "><bold>Add Contact</bold></button>
						<hr><br>
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Contact</h4>
									</div>
									<div class="modal-body">
										<form method="post" action="add.php">
											<div class="form-group">
												<label>Name</label>
												<input type="text" required name="Name" class="form-control">
											</div>
											<div class="form-group">
												<label>Number</label>
												<input type="text" required name="Number" class="form-control">
											</div>
											<div class="form-group">
												<label>Address</label>
												<input type="text" required name="Address" class="form-control">
											</div>
											<input type="submit" name="send" value="Add" class="btn btn-success">
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Number</th>
								<th scope="col">Address</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php while ( $row = $rows->fetch_assoc()) : ?>
								<th><?php echo $row['ID'] ?></th>
								<td class="col-md-4"><?php echo $row['Name'] ?></td>
								<td class="col-md-4"><?php echo $row['Number'] ?></td>
								<td class="col-md-4"><?php echo $row['Address'] ?></td>
								<td><a href="update.php?id= <?php echo $row['ID']; ?>" type="button" class="btn btn-success" style="background-color: #C0C0C0 ">Edit</a></td>
								<td><a href="delete.php?id= <?php echo $row['ID']; ?>" type="button" class="btn btn-success" style="background-color: #C0C0C0 ">Delete</a></td>
							</tr>
							<?php endwhile; ?>
							<?$x= 1;
        $y=2;
        if($x=$y){
            echo "true";
        }else{
            echo "false";
        }
                            ?>
							
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</body>
</html>