# _Bean's Travel Journal_

#### _PHP Silex & Twig Practice, 06.28.2017_

#### By _**Calla Rudolph & Max Scher**_

## Description

_This PHP exercise allows the user to pretend they are a tiny bean that travels the world.  The user can enter places they have visited, along with memories of the trip. The user can also delete their travel history if they choose_

## Setup Requirements

* Open GitHub site on your browser: https://github.com/maxobaxo/beans-travel-journal
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then copy the repository link and press enter
  * type 'cd beans-travel-journal' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
  * type 'cd web' to enter the web folder, then type 'php -S localhost:8000' to open local server
* In your browser, enter 'localhost:8000' to view the webpage on your browser
* Enter in the trip information to create a list of places, and empty the list if you no longer want to see them!

## Specifications
* It returns a list of information about each travel destination based on user input.
  * Example Input: [City: 'Portland', Duration: '4 Days']
  * Example Output:
    * Portland
        * I was there for 4 Days
* It clears the list when the delete button is pressed.
  * Example Input: *delete button pressed*
  * Example Output: List is cleared

## Technologies Used

* _PHP_
* _HTML_
* _Bootstrap CSS_
* _Silex_
* _Twig_
* _Composer_

### License

Copyright &copy; 2017 Calla Rudolph & Max Scher

This software is licensed under the MIT license.
