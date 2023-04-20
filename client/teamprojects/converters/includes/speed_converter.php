<?php

function convertToMilliSeconds($speed)
{
    return round((float) $speed / 3.6, 2);
}

function convertToKnots($speed)
{
    return round((float) $speed / 1.852, 2);
}

function convertSpeed()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $speed = $_POST['speed'] ?? '';
        $conversion = $_POST['speed-conversion'] ?? '';

        if ($conversion && is_numeric($speed)) {
            if ($conversion == 'kmh-to-ms') {
                return '<span>' . $speed . 'km/h is ' . convertToMilliSeconds($speed) . "m/s</span>";
            } else {
                return '<span>' . $speed . 'km/h is ' . convertToKnots($speed) . " knots</span>";
            }
        }
    }
}
