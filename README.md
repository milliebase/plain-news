# Plain News

<img src="https://media.giphy.com/media/n2AyI3woz0Fb2/giphy.gif" width="100%">

This is my first school assignment for our programming course as a web development student at YRGO.

__The assignment had to consist of:__
* A fake newsfeed written in PHP containing 5 different authors with at least 2 articles each.
* PHP functionality such as:
    * Variables
    * Multiple data types
    * Arrays
    * Functions
    * Loops (for, while or foreach)
    * Output (echo, print etc.)

__Languages allowed:__
* PHP
* HTML
* CSS
* Javascript

## Installation

1. To be able to see this webpage, clone this repository to your directory through the terminal.
```
$ git clone https://github.com/milliebase/plain-news.git
```

2. Change current directory to the cloned repo.
```
$ cd plain-news
```

3. Start your web server (8000 can be changed to any other 4 digits, ex. 1337 also works).
```
$ php -S localhost:8000
```

4. Enjoy my fake newsfeed made by Game of Thrones characters.

    <img src="https://media.giphy.com/media/QULik7rPy5V9VjBXFM/giphy.gif">

## Features

* Sort articles by descending order by default
* Like button (spam it a thousand times if you'd like)
* Filter articles by author
* Media Queries for iPad and iPhone 6/7/8

## Author
Betsy Alva Soplin

## Tested by
* Jesper Lundqvist
* Henric Björkvall

__Browsers:__

- [x] Brave
- [x] Google Chrome
- [x] Safari
- [x] Firefox

## Code reviews

* __Emelie Petersson__

1.~~Buttons have different stylings in safari, firefox and brave. Font-size is bigger in safari.~~

2.~~In docblocker for callback function to usort(), return type is set to integer but the function returns a boolean~~

3.~~Instead of writing “img/“ to each image in arrays, write it once in src=“img/…“ in html~~

4.Maybe add something to the javascript like function to make it clickable once per unique visitor?

5.~~In CSS, instead of repeating the background-colour to each author, try add the class after each button selector instead: .authorBtn:nth-child(1):hover, .jon ?~~


## License
MIT
