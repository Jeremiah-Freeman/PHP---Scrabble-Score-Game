<?php
    require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {

        function test_Add_Singles()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = "k";

            //Act
            $result = $test_ScrabbleScore->test_Add_Singles($input);

            //Assert
            $this->assertEquals("5" , $result);
        }
    }






 ?>
