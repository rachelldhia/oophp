<?php

class komputer{
    public static $processor = "Core 15";

    public static function memutar_video(){
        return "Komputer Memutar Video" . self::$processor;
    }
}


echo komputer::$processor;
echo komputer::memutar_video();

// $komputer_asrahan = new komputer();
// echo $komputer_asrahan->processor;
// echo $komputer_asrahan->memutar_video();
?>