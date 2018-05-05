<?php 

echo "Installing Sass...\n";

echo "\n\033[33mPress any key if you have brew installed\033[0m\n";

// Install homebrew
$brew = exec('/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"');

echo "Checking for Homebrew...\n";

echo "\n\033[32mHomebrew installed. \033[0m\n";

exec('brew install node');

echo "\n\033[32mNode installed.\033[0m\n";

exec('npm init --yes'); 

echo "\n\033[33mIf prompted, enter your password to install packages.\033[0m\n";


exec('sudo npm install gulp-cli -g && npm install gulp -D && npm install gulp-sass gulp-rename --save');

echo "\n\033[32mGulp packages installed.\033[0m\n";
echo "Creating gulpfile...\n";

$filename = 'gulpfile.js';
$gulpfile_content = "const gulp = require('gulp'),
			sass = require('gulp-sass'),
			rename = require('gulp-rename');

let stylesDirectory = 'css/';
let input = 'style.scss';
let output = 'style.css';

gulp.task('sass', function() {
  gulp.src(stylesDirectory + input)
      .pipe(sass().on('error', sass.logError))
      .pipe(rename(output))
      .pipe(gulp.dest(stylesDirectory));
});

gulp.task('sass:watch', function() {
  gulp.watch('css/**/*.scss', ['sass']);
});";

file_put_contents ( $filename, $gulpfile_content );

echo "\n\033[32mGulpfile created.\033[0m\n";

echo "\n\033[36mYou will need to update the file paths in the gulpfile so that they mirror your file structure.\033[0m\n";

echo "\n\033[32mRun gulp sass:watch\033[0m\n";




