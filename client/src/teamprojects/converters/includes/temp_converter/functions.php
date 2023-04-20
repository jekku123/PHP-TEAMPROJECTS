<?php
function convertToFahrenheit($temp)
{
    return (float) ($temp * 9 / 5) + 32;
}

function convertToKelvin($temp)
{
    return (float) $temp + 273.15;
}

function convertTemp()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST['temp'] ?? '';
        $conversion = $_POST['temp-conversion'] ?? '';

        if ($conversion && is_numeric($temp)) {
            if ($conversion == 'c-to-f') {
                return '<span>' . round($temp, 2) . '°C is ' . round(convertToFahrenheit($temp), 2) . "°F</span>";
            } else {
                return '<span>' . round($temp, 2) . '°C is ' . round(convertToKelvin($temp),) . " K</span>";
            }
        }
    }
}
