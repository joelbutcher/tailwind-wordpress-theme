const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const groupmq = require('gulp-group-css-media-queries');

const SASS_SOURCES = [
    './*.scss', // This picks up our style.scss file at the root of the theme
    'css/**/*.scss', // All other Sass files in the /css directory
];

/**
 * Compiles .scss to .css files.
 *
 * Run: gulp sass
 */
gulp.task( 'sass', function() {
    var tailwindcss = require('tailwindcss');

	return gulp
        .src(SASS_SOURCES, { base: './' })
		.pipe(plumber()) // Prevent termination on error
		.pipe( sourcemaps.init( { loadMaps: true } ) )
		.pipe( sass( { errLogToConsole: true } ) )
		.pipe(postcss([
            tailwindcss('./tailwind.js'),
            autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false,
            })
        ]))
        .pipe(groupmq()) // Group media queries!
		.pipe( sourcemaps.write( undefined, { sourceRoot: null } ) )
		.pipe( gulp.dest( '.' ) );
} );

/**
 * Compiles .scss to .css minifies css files.
 *
 * Run: gulp styles
 */
gulp.task( 'styles', function( callback ) {
	gulp.series( 'sass' )( callback );
} );

/**
 * Watch Sass files for changes
 */
gulp.task('watch', () => {
    gulp.watch(
        SASS_SOURCES, gulp.series( 'styles' )
    );
});