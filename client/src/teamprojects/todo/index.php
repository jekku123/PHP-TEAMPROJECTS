<?php include "todoHandler.php"; ?>
<?php include "includes/header.php"; ?>

<section>

    <form method="post" action="handleTodos.php">
        <input name='todo' placeholder="Insert todo..">
        <input type="submit" name="add" value="ADD" class="btn">
    </form>

    <div class="todos">
        <?php
        foreach ($todos as $todo) {
        ?>
            <div class="todo">
                <form method="post">
                    <input name="id-<?= $todo["id"] ?>" value="<?= $todo["id"] ?>" style="display:none">
                    <input name="todo-<?= $todo["id"] ?> " value="<?= $todo["todo"] ?>">
                    <input type="submit" name="update" value="UPDATE" class="btn">
                    <input type="submit" name="delete" value="DELETE" class="btn">
                </form>
            </div>
        <?php } ?>
    </div>

</section>

<?php include "includes/footer.php"; ?>