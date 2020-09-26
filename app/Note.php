<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function checkSerial($serial) {
        define("LENGTH", 12);
        define("SERIALNUMBER_REGEX", "/^([D-HJ-NPR-Z])([0-9]|[A-Z])([0-9]{10}$)/i");

        $serial = strtoupper($serial);
        $serial = htmlspecialchars(stripslashes(trim($serial)));
        

        if(strlen($serial) != LENGTH) {
            return 2;
        }
        else {
            if(preg_match(SERIALNUMBER_REGEX, $serial)) {
                $code = $serial[0];
                $bank = "";
                switch($code){
                    case "P":
                        $code = 1;
                        $bank = "Netherlands";
                        break;
                    case "Y":
                        $code = 1;
                        $bank = "Greece";
                        break;
                    case "G":
                        $code = 1;
                        $bank = "Cyprus";
                        break;
                    case "F":
                        $code = 2;
                        $bank = "Malta";
                        break;
                    case "X":
                        $code = 2;
                        $bank = "Germany";
                        break;
                    case "E":
                        $code = 3;
                        $bank = "Slovakia";
                        break;
                    case "N":
                        $code = 3;
                        $bank = "Austria";
                        break;
                    case "W":
                        $code = 3;
                        $bank = "Danmark";
                        break;
                    case "D":
                        $code = 4;
                        $bank = "Estonia";
                        break;
                    case "M":
                        $code = 4;
                        $bank = "Portugal";
                        break;
                    case "V":
                        $code = 4;
                        $bank = "Spain";
                        break;
                    case "U":
                        $code = 5;
                        $bank = "France";
                        break;
                    case "L":
                        $code = 5;
                        $bank = "Finland";
                        break;
                    case "T":
                        $code = 6;
                        $bank = "Ireland";
                        break;
                    case "K":
                        $code = 6;
                        $bank = "Sweden";
                        break;
                    case "S":
                        $code = 7;
                        $bank = "Italy";
                        break;
                    case "J":
                        $code = 7;
                        $bank = "United Kingdom";
                        break;
                    case "R":
                        $code = 8;
                        $bank = "Luxembourg";
                        break;
                    case "H":
                        $code = 9;
                        $bank = "Slovenia";
                        break;
                    case "Z":
                        $code = 9;
                        $bank = "Belgium";
                        break;
                }
                $series = $serial[1];
                if($series >= "A" && $series <= "Z") {
                    $series = ord($series);
                    $series = $series % 10 + floor($series / 10);
                }
                else {
                    $series = (int)$series;
                }
                $sum = $series;
                for($i = 2; $i < LENGTH; $i++) {
                    $sum += (int)$serial[$i];
                }
                while($sum > 9) {
                    $sum = $sum % 10 + floor($sum / 10);
                }
                error_log($sum);
                if($sum == $code) {
                    return 1;
                }
                else {
                    return 0;
                }
            }
            else {
                return 2;
            }
        }
    }
}
