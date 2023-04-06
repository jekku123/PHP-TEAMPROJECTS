<?php include 'includes/formhandler.php'; ?>
<?php include "includes/header.php"; ?>

<section>

    <form action="
    <?
    if (isset($_POST['submit'])) {
        if (empty($nameError) && empty($emailError)  && empty($messageError)) {
            echo 'formdata.php';
        } else {
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
        }
    }
    ?>
    " method="post">

        <h2>Contact Us</h2>

        <div class="input-component">
            <input type="text" placeholder=" " id="0" name="name" class="input-field" value="<?php echo $name; ?>" />
            <label>Name</label>
            <span class="error" id="name-error"><?php echo $nameError; ?></span>
        </div>

        <div class="input-component">
            <input type="text" placeholder=" " id="1" name="email" class="input-field" value="<?php echo $email; ?>" />
            <label>Email</label>
            <span class="error" id="email-error"><?php echo $emailError; ?></span>
        </div>

        <div class="input-component">
            <textarea name="message" placeholder=" " id="2" class="input-field"><?php echo $message; ?></textarea>
            <label>Message</label>
            <span class="error" id="message-error"><?php echo $messageError; ?></span>
        </div>

        <button type="submit" name="submit">Submit</button>

    </form>

    <?php



    ?>


</section>

<?php include "includes/footer.php"; ?>