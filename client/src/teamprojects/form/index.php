<?php include 'includes/formhandler.php'; ?>
<?php include "includes/header.php"; ?>

<section>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <h2>Contact Us</h2>

        <div class="input-component">
            <input type="text" placeholder=" " name="name" class="input-field" value="<?php echo $name; ?>" />
            <label>Name</label>
            <span class="error" id="name-error"><?php echo $nameError; ?></span>
        </div>

        <div class="input-component">
            <input type="text" placeholder=" " name="email" class="input-field" value="<?php echo $email; ?>" />
            <label>Email</label>
            <span class="error" id="email-error"><?php echo $emailError; ?></span>
        </div>

        <div class="input-component">
            <input type="text" placeholder=" " name="subject" class="input-field" value="<?php echo $subject; ?>" />
            <label>Subject</label>
            <span class="error" id="email-error"><?php echo $subjectError; ?></span>
        </div>

        <div class="input-component">
            <textarea name="message" id="growingtextarea" placeholder=" " class="input-field" rows="1"><?php echo $message; ?></textarea>
            <label>Message</label>
            <span class="error" id="message-error"><?php echo $messageError; ?></span>
        </div>

        <button type="submit" name="submit">SEND</button>

    </form>

    <?php



    ?>


</section>

<?php include "includes/footer.php"; ?>