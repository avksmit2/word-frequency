<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $chosenWord)
        {
            $i = 0;
            $punctuation = array(",", ".", "!", "''", ";", ":", "?");

            $words = explode(" ", $phrase);
            foreach ($words as $word) {
                // $word = preg_replace('/[^a-z0-9]+/i', '', $word);
                $chars = str_split($word);
                $j = 0;
                foreach ($chars as $character) {
                    if (in_array($character, $punctuation))
                    {
                        array_splice($chars,$j,1);
                    }
                    $j++;
                }

                $word = implode($chars);

                if (strtolower($word) == strtolower($chosenWord))
                {
                    $i++;
                }
            }
            return $i;
        }
    }
?>
