<?php
global $conn;
require_once 'core/functions.php';
require_once './template/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="border rounded p-5">
                <h3 class="text-center">List</h3>
                <?php

                $sql = "SELECT * FROM bankers";
                $query = mysqli_query($conn, $sql);
                $totalSql = "SELECT SUM(money) AS total FROM bankers";
                $totalQuery = mysqli_query($conn,$totalSql);
                ?>
                <div class="py-2">
                   TOTAL :  <?php echo $query->num_rows;?>
                </div>
                <table class="table table-success table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col" class="text-end">MONEY</th>
                        <th scope="col" class="text-start">DATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_assoc($query)): ?>
                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td class="text-end">
                                <?php echo $row['money']; ?>
                            </td>
                            <td class="text-startcenter">
                                <p class="mb-0 small">
                                    <i class="bi bi-calendar"></i>
                                    <?php
                                    echo   date('d:M:Y', strtotime($row['created_at']));
                                    ?>
                                </p>
                                <p class="mb-0 small">
                                    <i class="bi bi-clock"></i>
                                    <?php
                                    echo   date(' h:i:s', strtotime($row['created_at']));
                                    ?>
                                </p>
                            </td>
                        </tr>


                    <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-center">
                                TOTAL
                            </td>
                            <td colspan="2" class="text-center">
                                <?php echo  mysqli_fetch_assoc($totalQuery)['total'];?>
                            </td>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
<?php require_once './template/footer.php'; ?>
