<?php
require 'db.php';
$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
require 'header.php';
?>
<div class="container">
    <div class="card mt-4">
        <div class="card-header"><h2>All people</h2></div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php foreach($people as $p): ?>
                    <tr>
                        <td><?=$p->id;?></td>
                        <td><?=$p->name;?></td>
                        <td><?=$p->email;?></td>
                        <td>
                            <a href="edit.php?id=<?= $p->id?>" class="btn btn-info">Update</a>
                            <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?=$p->id?>" class='btn  btn-danger'>Delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
