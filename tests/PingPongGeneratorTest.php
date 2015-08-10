<?php

require_once "src/PingPong.php";

class PingPongGeneratorTest extends PHPUnit_Framework_TestCase {



    function test_pingTest() {
        //ARRANGE
        $test_array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
        $test_pingTest = new PingPongGenerator;
        $input = 15;
        //ACT
        $results = $test_pingTest->generatePingPongArray($input);

        //ASSERT
        $this->assertEquals($test_array, $results);
    }

    function test_pingTestTo15() {
        //ARRANGE
        $test_array1 = array("0", "1", "2", "ping", "4", "5", "ping", "7", "8", "ping", "10", "11", "ping", "13", "14", "ping");
        $test_pingTest = new PingPongGenerator;
        $input = 15;
        //ACT
        $results = $test_pingTest->generatePingPongArray($input);

        //ASSERT
        $this->assertEquals($test_array1, $results);
    }

}
?>
