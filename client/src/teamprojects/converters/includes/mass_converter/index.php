<?php include "includes/mass_converter/functions.php"; ?>

<article class="card">
    <h2>Mass Converter</h2>

    <form method="post" class="mass-form">
        <div class="selections">
            <input type="text" name="mass">
            <select name="mass-conversion">
                <option value="" disabled selected>Choose..</option>
                <option value="kg-to-g">kg to g</option>
                <option value="g-to-kg">g to kg</option>
            </select>
        </div>
        <button type="submit">Convert</button>
    </form>

    <?= '<p>Result: ' . convertMass() . '</p>'; ?>

</article>