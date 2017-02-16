<?php
    class ScrabbleScore
    {
        public $list_of_letters = array(
            'a' => 1,
            'e' => 1,
            'i' => 1,
            'o' => 1,
            'u' => 1,
            'l' => 1,
            'n' => 1,
            'r' => 1,
            's' => 1,
            't' => 1,
            'd' => 2,
            'g' => 2,
            'b' => 3,
            'c' => 3,
            'm' => 3,
            'p' => 3,
            'k' => 5,
            'j' => 8,
            'x' => 8,
            'q' => 10,
            'z' => 10
        );


        function getLetter()
        {
            return $this->list_of_letters;
        }

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

        function test_Input($input)
        {
            $output = 0;
            $input_letter = str_split($input);

            foreach($input_letter as $value) {
                foreach($this->list_of_letters as $letter_match) {
                    if ($value == $letter_match) {
                        $output += $letter_match;
                    }
                }
            }

            return $output;
        }
    }
?>
