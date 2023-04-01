<?php include "includes/cards/mass_converter/functions.php"; ?>

<article>

    <h2>Mass Converter</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="kilo">Kilo</label>
        <input type="text" id="kilo" name="kilo">
        <button type="submit">Convert</button>
    </form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="gram">Gram</label>
        <input type="text" id="gram" name="gram">
        <button type="submit">Convert</button>
    </form>

    <?= '<p>Result: ' . convertMass() . '</p>'; ?>

</article>