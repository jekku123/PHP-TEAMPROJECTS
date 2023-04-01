<?php include "includes/cards/speed_converter/functions.php"; ?>

<article class="card">
    <h2>Speed Converter</h2>

    <form method="post" class="mass-form">
        <div class="selections">
            <input type="text" name="speed">
            <select name="speed-conversion">
                <option value="" disabled selected>Choose..</option>
                <option value="kmh-to-ms">km/h to m/s</option>
                <option value="kmh-to-knots">km/h to knots</option>
            </select>
        </div>
        <button type="submit">Convert</button>
    </form>

    <?= '<p>Result: ' . convertSpeed() . '</p>'; ?>

</article>