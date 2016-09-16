<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $chosenWord)
        {
            $i = 0;
            $words = explode(" ", $phrase);
            foreach ($words as $word) {
                if (preg_match('/[.!?,;:]$/', $word) == 1)
                {
                    $punctuation = substr($word, -1);
                    $word = chop($word, $punctuation);
                }

                if (strtolower($word) == strtolower($chosenWord))
                {
                    $i++;
                }
            }
            return $i;
        }
    }
?>
