<?php include "post-controller.php"; ?>
<?php include "includes/header.php"; ?>

<?php $todos = $myTodos->get_all(); ?>

<section>

    <form method="post" action="post-controller.php">
        <input name='todo' placeholder="Add todo..">
        <input type="submit" name="add" value="ADD" class="btn">
    </form>

    <div class="todos">
        <?php
        if ($todos) {
            foreach ($todos as $todo) { ?>
                <form method="post">
                    <input name="id-<?= $todo["id"] ?>" value="<?= $todo["id"] ?>" style="display:none">
                    <input name="todo-<?= $todo["id"] ?> " value="<?= $todo["todo"] ?>">
                    <input type="submit" name="update" value="UPDATE" class="btn">
                    <input type="submit" name="delete" value="DELETE" class="btn">
                </form>
            <?php
            }
        } else {
            ?>
            <p>Nothing to do.</p>
            <p>Add todo to have something to do.</p>
        <?php
        }
        ?>
    </div>

</section>

</main>

<?php include "includes/footer.php"; ?>