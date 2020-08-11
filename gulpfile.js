var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require ('browser-sync').create();
var minCss = require ('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');

//function that compile scss into css
function scss () {
    return gulp

    // 1. where is my scss file?
        .src('./scss/screen.scss')

    // 2. pass that file through the sass compiler
        .pipe(sass())

    // 3.Autoprefixer after compiling
        .pipe(autoprefixer())

    // 4. in case of error, it will only show the exact error
        .on('error', sass.logError)    

    // 6.where do I save the compiled css?
        .pipe(gulp.dest('./css'))    

    // 7. minimize css
        .pipe(minCss())

    // 8. rename
        .pipe(rename({ prefix: 'min-' }))    
    
    // 9.where do I save the minimalized css?
        .pipe(gulp.dest('./css'))

    // 10. stream changes to all browsers / syncronize everything between different browsers / update css without refreshing browser
        .pipe(browserSync.stream());
}

//watching and updating automatically
function watch () {
    browserSync.init ({
        //set up the server
        server: {
            baseDir: './'
        }
    });
    //watching for changes
    gulp.watch('./scss/**/*.scss', scss); //compiling automatically
    gulp.watch('./*.html').on('change', browserSync.reload); // refresh browser
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.scss = scss;
exports.watch = watch;