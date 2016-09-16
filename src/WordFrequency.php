<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $chosenWord)
        {
            $i = 0;
            $words = explode(" ", $phrase);
            foreach ($words as $word) {
                $word = preg_replace('/[^a-z0-9]+/i', '', $word);

                if (strtolower($word) == strtolower($chosenWord))
                {
                    $i++;
                }
            }
            return $i;
        }
    }
?>
