<?php
function convertToMilliSeconds($speed)
{
    return (float) $speed / 3.6;
}

function convertToKnots($speed)
{
    return (float) $speed / 1.852;
}

function convertSpeed()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $speed = $_POST['speed'] ?? '';
        $conversion = $_POST['speed-conversion'] ?? '';

        if ($conversion && is_numeric($speed)) {
            if ($conversion == 'kmh-to-ms') {
                return '<span>' . round($speed, 2) . 'km/h is ' . round(convertToMilliSeconds($speed), 2) . "m/s</span>";
            } else {
                return '<span>' . round($speed, 2) . 'km/h ' . round(convertToKnots($speed), 2) . " knots</span>";
            }
        }
    }
}
