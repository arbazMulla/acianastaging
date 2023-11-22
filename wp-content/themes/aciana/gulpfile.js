var gulp = require('gulp');  
var concat = require('gulp-concat');  
var rename = require('gulp-rename');  
var uglify = require('gulp-uglify');  
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var htmlmin = require('gulp-htmlmin');
var imagemin = require('gulp-imagemin');

var jsFiles = ['js/bootstrap.min.js','js/skip-link-focus-fix.js','js/viewportchecker.js','js/slick.min.js','js/jquery.magnific-popup.min.js','js/custom.js'],  
    jsDest = 'assets/js/';

gulp.task('scripts', function() {  
    return gulp.src(jsFiles)
        .pipe(concat('app.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest))
        .pipe(reload({stream:true}));
});



gulp.task('css', function(){
   return gulp.src(['css/wp.css','css/bootstrap.min.css','css/icomoon.css','css/slick.css','css/magnific-popup.css','css/custom.css','css/responsive.css'])
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
    .pipe(concat('app.css'))
    .pipe(gulp.dest('assets/css/'))
    .pipe(rename('app.min.css'))
    .pipe(cleanCSS())
    .pipe(gulp.dest('assets/css/'))
    .pipe(reload({stream:true}));
});

gulp.task('fonts', function(){
   return gulp.src(['css/fonts/*']).pipe(gulp.dest('assets/css/fonts/'))
});

gulp.task('images', function(){
   return gulp.src(['images/**/*.**']).pipe(gulp.dest('assets/images/'))
});

gulp.task('imagemin', () =>
    gulp.src('images/*.**')
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 7,
            svgoPlugins: [{removeViewBox: false}],
            /*use: [pngquant(), jpegtran(), optipng(), gifsicle()]*/
        }))
        .pipe(gulp.dest('assets/images/'))
);
 
gulp.task(
    'default',
    gulp.parallel(
        'scripts',
        'fonts',
        'css',
        'images',
        'imagemin',
        function watchFiles() {
            gulp.watch('js/*',gulp.series(['scripts']));
            gulp.watch('images/**/*.**',gulp.series(['images']));
            gulp.watch('css/fonts/*',gulp.series(['fonts']));
            gulp.watch('css/*.css',gulp.parallel(['css']));
        }
    )
);