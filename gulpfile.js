var gulp = require('gulp'),
	sass = require('gulp-sass'),
	prefix = require('gulp-autoprefixer'),
	sourcemaps = require('gulp-sourcemaps'),
	livereload = require('gulp-livereload');



// build sass and place it in build dir
gulp.task('sass', function () {
	gulp.src('themes/desi/scss/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(sourcemaps.write())
		// i think this needs to be after the sourcemap :|
		.pipe(prefix())
		.pipe(gulp.dest('themes/desi/build/css'));
});

// watchers
gulp.task('watch', function() {
	livereload.listen();
	// gulp.watch('js/*.js', ['lint', 'scripts']);

	// sass
	gulp.watch('themes/desi/scss/*.scss', ['sass']);

	// livereload once the build has been updated
	gulp.watch('themes/desi/build/**').on('change', livereload.changed);
});
