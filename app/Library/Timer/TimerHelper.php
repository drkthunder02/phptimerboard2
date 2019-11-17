<?php

namespace App\Library\Timer;

/**
 * This library performs some of the calculations needed to be done
 * repeatedly for the timer board.
 */

//Internal Libraries
use DB;
use Log;
use Carbon\Carbon;

//Models


//Application Libraries

class TimerHelper {

    public function ConvertTimeToTimeString($time) {
        $hours = ceil($time / 3600) % 24;
        $minutes = ceil($time / 60) % 60;
        $days = ceil($time / 86400);
        
        $timeString = $days . "D ". $hours . ":" . $minutes;
        
        return $timeString;
    }

    public function ConvertTimeFromInteger($time) {
        $timeString = date("Y-m-d H:i:s", $time);
        
        return $timeString;
    }
}