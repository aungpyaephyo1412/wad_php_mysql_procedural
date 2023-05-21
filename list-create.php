<?php
global $conn;
require_once './template/header.php';
require_once 'core/connection.php'
?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <div class="border rounded">
                    <h3 class="text-center">Create List</h3>
                    <form action="" class="p-4" method="POST">
                        <?php

                        if ($_SERVER['REQUEST_METHOD'] === "POST") {
                            $name = $_POST['name'];
                            $money = $_POST['money'];
                            $query = "INSERT INTO bankers (name, money) Values ('$name',$money)";
                        if (mysqli_query($conn, query: $query)) {
                            echo alart('successfully');
                        }
                        }
                        ?>
                        <div class="mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" required/>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="money">Money</label>
                            <input class="form-control" type="number" id="money" name="money" required/>
                        </div>
                        <button class="btn btn-primary w-100">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php require_once './template/footer.php'; ?>