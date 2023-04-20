<?php include "includes/header.php"; ?>
<?php include "includes/mass_converter/functions.php"; ?>
<?php include "includes/temp_converter/functions.php"; ?>
<?php include "includes/speed_converter/functions.php"; ?>


<section>

    <article class="card">
        <h2>Temp Converter</h2>

        <form method="post" class="temp-form">
            <div class="selections">
                <input type="text" name="temp" placeholder="Temp" value='<?php $keke ?>'>
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


    <article class="card">
        <h2>Speed Converter</h2>

        <form method="post" class="mass-form">
            <div class="selections">
                <input type="text" name="speed" placeholder="Speed">
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


    <article class="card">
        <h2>Mass Converter</h2>

        <form method="post" class="mass-form">
            <div class="selections">
                <input type="text" name="mass" placeholder="Weight">
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

</section>

<?php include "includes/footer.php"; ?>