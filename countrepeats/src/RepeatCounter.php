<?php

    class RepeatCounter
    {

        function countRepeats($input_word, $input_string)
        {
            $input_array_string = explode(" ", $input_string);

            var_dump($input_array_string);

            foreach ($input_array_string as $string) {

                if (in_array($input_word, $input_array_string)) {

                    echo $string;

                    return $string;

                }
            }
        }
    }



 ?>
