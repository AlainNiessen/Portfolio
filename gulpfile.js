var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require ('browser-sync').create();
var minCss = require ('gulp-clean-css');
var rename = require('gulp-rename');
var uglify = require ('gulp-terser');
var concat = require ('gulp-concat');
var imageMin = require ('gulp-imagemin');


//function that compile scss into css
function scss () {
    return gulp

    // 1. where is my scss file?
        .src('./src/scss/screen.scss')

    // 2. pass that file through the sass compiler
        .pipe(sass())

    // 3. in case of error, it will only show the exact error
        .on('error', sass.logError)    

    // 4.where do I save the compiled css? Lisible!
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

//function that concat and minimalize JS
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
    
    // 5.where do I save the minimalized concat js?
        .pipe(gulp.dest('./dist/js'));

}

//function for compressing images
function compressImg () {
    return gulp

    // 1. where is my img file?
        .src('./src/img/*') // * for all img-files

    // 2.Compress img-files
        .pipe(imageMin())

    // 3. where do I save the compressed img-files 
        .pipe(gulp.dest('./dist/img'));   
    
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
    gulp.watch('.src/img.*', compressImg); //watching for every changes in src-img-folder and execute compressImg function
}

//Exporting all functions
exports.scss = scss;
exports.compress = compress;
exports.compressImg = compressImg;
exports.watch = watch;
