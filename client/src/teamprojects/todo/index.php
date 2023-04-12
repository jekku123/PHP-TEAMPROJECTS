<?php include "includes/todoHandler.php"; ?>
<?php include "includes/header.php"; ?>

<section>

    <form method="post">
        <input name='todo'>
        <input type="submit" name="add" value="ADD" class="btn">
    </form>

    <div class="todos">
        <?php
        while ($row = mysqli_fetch_assoc($todos)) {
        ?>
            <div class="todo">
                <form method="post">
                    <input name="id-<?= $row["id"] ?>" value="<?= $row["id"] ?>" style="display:none">
                    <input name="todo-<?= $row["id"] ?> " value="<?= $row["todo"] ?>">
                    <input type="submit" name="update" value="UPDATE" class="btn">
                    <input type="submit" name="delete" value="DELETE" class="btn">
                </form>
            </div>
        <?php } ?>
    </div>

</section>

<?php include "includes/footer.php"; ?>