<?php

$converted_speed = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['speed']) && !empty($_POST['speed-conversion'])) {
        $speed = $_POST['speed'];
        $conversion = $_POST['speed-conversion'];

        if (is_numeric($speed)) {
            if ($conversion == 'kmh-to-ms') {
                $converted_speed = convertToMilliSeconds($speed);
            } else {
                $converted_speed = convertToKnots($speed);
            }
        }
    }
}

function convertToMilliSeconds($speed)
{
    return round((float) $speed / 3.6, 2);
}

function convertToKnots($speed)
{
    return round((float) $speed / 1.852, 2);
}
