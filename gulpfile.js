// Initialize modules
const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const rename = require("gulp-rename");


const paths = {
    'styles': {
        'src': 'sass/**/*.scss',
        'dest': 'assets/css/',
    }
};
// Sass task: compiles the style.scss file into style.css
gulp.task('sass', function(){
    return gulp.src(paths.styles.src)
        .pipe(sourcemaps.init())
        .pipe(sass()) // compile SCSS to CSS
        .pipe(postcss([ autoprefixer(), cssnano() ])) // PostCSS plugins
        .pipe(rename({suffix: ".min"}))
        .pipe(sourcemaps.write('.')) // Write sourcemaps file
        .pipe(gulp.dest(paths.styles.dest)); // put final CSS in dist folder
});

// JS task: concatenates and uglifies JS files to script.js
// gulp.task('js', function(){
//     return gulp.src([
//         'app/js/*.js'
//         //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
//     ])
//         .pipe(concat('all.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest('dist'));
// });

// Watch task: watch SCSS and JS files for changes
gulp.task('watch', function(){
    gulp.watch(paths.styles.src, gulp.series('sass'));
    // gulp.watch([
    //     'app/js/**/*.js'
    //     //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
    // ], gulp.series('js'));    
});

// Default task
gulp.task('default', gulp.series('sass', 'watch'));