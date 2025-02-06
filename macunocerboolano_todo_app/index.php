<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Adding Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col col-12 p-3">
                <!-- card-->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">TODO APPLICATION</h1>
                        <p class="card-text small text-secondary">Manage your tasks easily.</p>
                        <!-- form group-->
                        <form action="operations/new_task.php" method="POST" class="input-group mb-3">
                            <input required type="text" class="form-control" placeholder="Add new task here..." aria-label="Task Name" name="Task">
                            <button class="btn btn-outline-success" type="submit" id="button-addon2">Add</button>
                        </form>
                        <!-- form group-->

                        <!-- tasklist-->
                        <div class="d-flex flex-column gap-3">
                            <?php
                            foreach ($_SESSION['tasks'] as $index => $task) {
                                // Assuming task is stored as an array ['name' => 'task_name', 'status' => 'Pending']
                            ?>
                                <div class="d-flex align-items-center justify-content-between">
                                    <form action="operations/mark_task.php" method="POST">
                                        <div class="d-flex align-items-center gap-2">
                                            <input value="<?php echo $index; ?>" hidden name="id">
                                            <input type="checkbox" class="form-check-input mt-0" onchange="this.form.submit();" <?php echo ($task['status'] == 'Completed' ? 'checked' : ''); ?>>
                                            <label class="form-check-label"><?php echo $task['name']; ?></label>
                                            <span class="badge rounded-pill text-bg-<?php echo ($task['status'] == 'Pending' ? 'warning' : 'success'); ?>"><?php echo $task['status']; ?></span>
                                        </div>
                                    </form>
                                    <form action="operations/delete_task.php" method="POST">
                                        <input value="<?php echo $index; ?>" hidden name="id">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            <?php
                            }
                            ?>
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