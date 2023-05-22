<?php
session_start();
global $conn;
require_once './template/header.php';
require_once 'core/connection.php'
?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <div class="border rounded">
                    <h3 class="text-center">Update List</h3>
                    <form action="<?php echo url("list-update-logic.php") ?>" class="p-4" method="POST">
                        <?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM bankers WHERE id = $id";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);
                        $_SESSION['status'] = [
                            'message' => 'List updated'
                        ];
                        ?>
                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                        <div class="mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input value="<?php echo $row['name']; ?>" class="form-control" type="text" id="name"
                                   name="name" required/>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="money">Money</label>
                            <input value="<?php echo $row['money']; ?>" class="form-control" type="number" id="money"
                                   name="money" required/>
                        </div>
                        <button class="btn btn-primary w-100">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php require_once './template/footer.php'; ?>