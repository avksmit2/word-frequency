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

        function test_countRepeats_ignorePunctuation()
        {
            // Assemble
            $test_Phrase = new RepeatCounter();
            $phrase = "word, having some word.";
            $chosenWord = "word";

            // Act
            $result = $test_Phrase->countRepeats($phrase, $chosenWord);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_multipleSentences()
        {
            // Assemble
            $test_Phrase = new RepeatCounter();
            $phrase = "word, having some word. some word was there with a word!";
            $chosenWord = "word";

            // Act
            $result = $test_Phrase->countRepeats($phrase, $chosenWord);

            // Assert
            $this->assertEquals(4, $result);
        }
    }



?>
