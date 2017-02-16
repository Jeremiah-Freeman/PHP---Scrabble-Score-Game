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
            $this->assertEquals(5, $result);
        }

        function test_Whole_Word()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = "love";

            //Act
            $result = $test_ScrabbleScore->test_Whole_Word($input);

            //Assert
            $this->assertEquals(7 , $result);
        }

        function test_Input()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = "hello";

            //Act
            $result = $test_ScrabbleScore->test_Input($input);

            //Assert
            $this->assertEquals(8 , $result);
        }
    }






 ?>
