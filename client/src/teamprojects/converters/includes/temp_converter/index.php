<?php include "includes/temp_converter/functions.php"; ?>

<article class="card">
    <h2>Temp Converter</h2>

    <form method="post" class="temp-form">
        <div class="selections">
            <input type="text" name="temp" placeholder="Temp">
            <select name="temp-conversion">
                <option value="" disabled selected>Choose..</option>
                <option value="c-to-f">°C to °F</option>
                <option value="c-to-k">°C to K</option>
            </select>
        </div>
        <button type="submit">Convert</button>
    </form>

    <?= '<p>Result: ' . convertTemp() . '</p>'; ?>

</article>