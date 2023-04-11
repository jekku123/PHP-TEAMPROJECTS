<?php include "includes/todoHandler.php"; ?>
<?php include "includes/header.php"; ?>

<section>

    <form action="index.php" method="post" class="add-todo">
        <input type="text" name='todo'>
        <input type="submit" name="add" value="Add">
    </form>

    <div class="todos">
        <?php
        while ($row = mysqli_fetch_assoc($result_all)) {
        ?>
            <div class="todo">
                <form action="index.php" method="post">
                    <input name="table-id-<?= $row["id"] ?>" value="<?= $row["id"] ?>" style="display:none">
                    <input name="table-todo-<?= $row["id"] ?> " value="<?= $row["todo"] ?>">
                    <input type="submit" name="update" value="Update">
                    <input type="submit" name="delete" value="Delete">
                </form>
            </div>
        <?php } ?>
    </div>

</section>

<?php include "includes/footer.php"; ?>