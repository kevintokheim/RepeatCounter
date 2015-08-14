<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_oneWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals("a", $result);
        }

        function test_countRepeats_twoWords()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a b";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals("a", $result);
        }
    }



?>
