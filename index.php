<? php 
	session_start();

	if(!isset($_SESSION['tasks'])){
		$_SESSION['tasks']=[]
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col col-5"> 
	<!-- card-->
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">TODO APPLICATION</h1>
					<p class="card-text small text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	<!-- form group-->
					<form action="operations/new_task.php" method="POST" class="input-group mb-3">
						<input required type="text" class="form-control" placeholder="Add new task here..." aria-label="Recipient's username" aria-describedby="button-addon2" name = "Task">
						<button class="btn btn-success" type="submit" id="button-addon2">Add</button>
					</form>
	<!-- form group-->

	<!-- tasklist-->
						<div class="d-flex flex-column gap-2">
							<div class="d-flex justify-content-between">
								<div class="d-flex align-items-center gap-2">
									<input type="checkbox" class="form-check-input mt-0">
									<label class="form-check-label">Task 1</label>
									<span class="badge text-bg-primary">Primary</span>
								</div>
								<button class="btn btn-danger">Delete</button>
								
						</div>
						</div>
	<!-- tasklist-->
				</div>
				</div>
	<!-- card-->
			</div>
		</div>

	</div>
  	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
