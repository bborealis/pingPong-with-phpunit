<?php

class PingPongGenerator {

    function generatePingPongArray($counter) {

        $input_array = array();

        for ($i = 0; $i <= $counter; $i++) {
            if (($i % 3) == 0){
                array_push($input_array, "ping");
            } else {
                array_push($input_array, (string)$i);
            }

        }
        return $input_array;
    }



}

?>
