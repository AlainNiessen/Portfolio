var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require ('browser-sync').create();
var minCss = require ('gulp-clean-css');
var rename = require('gulp-rename');
var uglify = require ('gulp-uglify');
var concat = require ('gulp-concat');


//function that compile scss into css
function scss () {
    return gulp

    // 1. where is my scss file?
        .src('./src/scss/screen.scss')

    // 2. pass that file through the sass compiler
        .pipe(sass())

    // 3. in case of error, it will only show the exact error
        .on('error', sass.logError)    

    // 4.where do I save the compiled css?
        .pipe(gulp.dest('./src/css'))    

    // 5. minimize css
        .pipe(minCss())

    // 6. rename
        .pipe(rename({ prefix: 'min-' }))    
    
    // 7.where do I save the minimalized css?
        .pipe(gulp.dest('./dist/css'))

    // 8. stream changes to all browsers / syncronize everything between different browsers / update css without refreshing browser
        .pipe(browserSync.stream());
}

//function that minimalize JS
function compress () {
    return gulp

    // 1. where is my js file?
        .src('./src/js/**/*.js')

    // 2.Concat all js files to one file
        .pipe(concat('all.js'))

    // 3. minify 
        .pipe(uglify())  
        
    // 4. rename
        .pipe(rename({ prefix: 'min-' }))    
    
    // 5.where do I save the minimalized js?
        .pipe(gulp.dest('./dist/js'))

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
    gulp.watch('./src/scss/**/*.scss', scss); //compiling automatically    
    gulp.watch('./*.html').on('change', browserSync.reload); // refresh browser
    gulp.watch('./src/js/**/*.js', compress); //watching for every change in all js-files and execute function compress automatically
    
}

exports.scss = scss;
exports.compress = compress;
exports.watch = watch;