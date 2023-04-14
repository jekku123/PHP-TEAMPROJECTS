<?php

$converted_temp = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['temp']) && !empty($_POST['temp-conversion'])) {
        $temp = $_POST['temp'];
        $conversion = $_POST['temp-conversion'];

        if (is_numeric($temp)) {
            if ($conversion == 'c-to-f') {
                $converted_temp = convertToFahrenheit($temp);
            } else {
                $converted_temp = convertToKelvin($temp);
            }
        }
    }
}

function convertToFahrenheit($temp)
{
    return round((float) ($temp * 9 / 5) + 32, 2);
}

function convertToKelvin($temp)
{
    return round((float) $temp + 273.15, 2);
}
