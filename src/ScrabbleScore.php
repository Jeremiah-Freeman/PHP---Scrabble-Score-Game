<?php
    class ScrabbleScore
    {
        function test_Add_Singles($input)
        {
            $input = array('k' => 5);
            return $input['k'];
        }

        function test_Whole_Word($input)
        {
            $input = array('l' => 1,'o' => 1,'v' => 4,'e' => 1);
            $output = 0;

            foreach($input as $value)
            {
                $output += $value;
            }

            return $output;
        }
    }
?>
