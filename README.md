# _{Word Frequency}_

#### _An application that returns the number of times a word is repeated in a phrase, {September 16, 2016}_

#### By _**Angela Smith**_

## Description

_{This website will allow a user to input a word and a phrase; the program will then display how many times that word was used in that phrase.}_

## Specifications

| Behavior      | Input       |Output|Reasoning|
| ------------- |-------------| -----| -----|
| Display how many times a word has been used in a phrase consisting of two words | ["word word"], word | 2 | program will compare only two words, showing that they match and return that "word" has been used twice |
| Ignore capitalization of letters | ("worD WOrd"), word | 2 | values with capital letters will all be changed to lowercase no matter where the capital letter is, so they will be matching, returning that "word" has been used twice |
| Display how many times a word has been used in a phrase consisting of many words | ["word having some word"], word | 2 | program will compare many words and pick out the chosen word, returning that "word" has been used twice |
| Ignore punctuation | ["word, having some word."], word | 2 | program will compare many words with punctuation and pick out the chosen word, ignoring the punctuation, returning that "word" has been used twice |
| Display how many times a word has been used in a phrase consisting of multiple sentences. | ["word, having some word. some word was there with a word!"], word | 2 | program will compare many words in multiple sentences and pick out the chosen word, returning that "word" has been used four times. |


## Setup/Installation Requirements

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application\

## Known Bugs

_There are no known bugs at this time_

## Support and contact details

_Angela Smith: avksmit2@gmail.com_

## Technologies Used

_HTML,
CSS,
Bootstrap,
PHP,
Silex,
Twig,
PHPUnit_

### License

*This webpage is licensed under the MIT license.*

Copyright (c) 2016 **_Angela Smith_**
