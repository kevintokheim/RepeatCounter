<?php

    class RepeatCounter
    {

        function countRepeats($input_word, $input_string)
        {

            //takes $input_string and turns it into an array of strings
            $input_array_string = explode(" ", $input_string);

            $words_and_repeats = array();

            foreach ($input_array_string as $string) {

                //checks to see if $input_word is in $input_array_string
                //and if true returns $string (the word being searched for)
                // if (in_array($input_word, $input_array_string)) {
                //
                //     function repeated_words($input_word, $input_array_string) {
                //         $count = array_count_values($input_array_string);
                //         echo $count[$input_word];
                //     }


                    return $string;

                //}
            }
        }
    }



 ?>
