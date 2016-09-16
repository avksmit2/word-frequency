<?php
    require_once __DIR__. "/../src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_repeatsOnce()
        {
            // Assemble
            $test_Phrase = new RepeatCounter();
            $phrase = "word word";
            $chosenWord = "word";

            // Act
            $result = $test_Phrase->countRepeats($phrase, $chosenWord);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_ignoresCapitals()
        {
            // Assemble
            $test_Phrase = new RepeatCounter();
            $phrase = "worD WOrd";
            $chosenWord = "word";

            // Act
            $result = $test_Phrase->countRepeats($phrase, $chosenWord);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_manyWords()
        {
            // Assemble
            $test_Phrase = new RepeatCounter();
            $phrase = "word having some word";
            $chosenWord = "word";

            // Act
            $result = $test_Phrase->countRepeats($phrase, $chosenWord);

            // Assert
            $this->assertEquals(2, $result);
        }

        
    }



?>
