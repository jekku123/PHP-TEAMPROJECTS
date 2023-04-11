<?php include "includes/todoHandler.php"; ?>
<?php include "includes/header.php"; ?>

<section>

    <form method="post">
        <input name='todo'>
        <input type="submit" name="add" value="Add">
    </form>

    <div class="todos">
        <?php
        while ($row = mysqli_fetch_assoc($todos)) {
        ?>
            <div class="todo">
                <form method="post">
                    <input name="id-<?= $row["id"] ?>" value="<?= $row["id"] ?>" style="display:none">
                    <input name="todo-<?= $row["id"] ?> " value="<?= $row["todo"] ?>">
                    <input type="submit" name="update" value="Update">
                    <input type="submit" name="delete" value="Delete">
                </form>
            </div>
        <?php } ?>
    </div>

</section>

<?php include "includes/footer.php"; ?>