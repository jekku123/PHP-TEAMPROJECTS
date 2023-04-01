<?php include "includes/cards/mass_converter/functions.php"; ?>

<article class="card">
    <h2>Mass Converter</h2>


    <form method="post" class="mass-form">
        <div class="selections">
            <input type="text" id="mass" name="mass">
            <select name="conversion">
                <option value="" disabled selected>Choose..</option>
                <option value="kg-to-g">KG to G</option>
                <option value="g-to-kg">G to KG</option>
            </select>
        </div>
        <button type="submit">Convert</button>
    </form>

    <?= '<p>Result: ' . convertMass() . '</p>'; ?>

</article>