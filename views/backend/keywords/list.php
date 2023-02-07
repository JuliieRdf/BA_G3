<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$MotCles = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>MotCle</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($MotCles as $MotCle) { ?>
                        <tr>
                            <td><?php echo $MotCle['numMotCle']; ?></td>
                            <td><?php echo $MotCle['libMotCle']; ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo $MotCle['numMotCle']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo $MotCle['numMotCle']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer