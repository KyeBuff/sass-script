# Sass with Gulp scripts

You are required to have PHP installed.

Clone this repository into your site's project directory and run:

## Mac OSX
```
php mac-script.php
```

The script checks for and installs the following: 
* Homebrew
* Node
* Gulp CLI

It also creates a gulpfile and installs all the required node modules.

## Windows
Windows script to follow.

## Getting started

You will need to make sure that the paths specified in the gulpfile match your site structure.

Change the following variables to match the directory of your stylesheets. The below settings will look in a css folder for a style.scss and output a style.css to that same css folder.

```
let stylesDirectory = 'css/';
let input = 'style.scss';
let ouput = 'style.css';
```
