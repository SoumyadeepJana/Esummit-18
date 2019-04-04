var gulp = require('gulp');
// var imageResize = require('gulp-image-resize');
 
// gulp.task('default', function () {
//   gulp.src('assets/img/event/speakers/harsh-songra-celt.jpg')
//     .pipe(imageResize({
//       width : 90,
//       height : 90,
//       crop : true,
//       upscale : false
//     }))
//     .pipe(gulp.dest('dist'));
// });

var jimp = require("gulp-jimp-resize");
//var gulp = require('gulp');
 
gulp.task('images', function() {
    return gulp.src(
        'assets/img/client-logo/*.{png,jpg,bmp}'
        )
    .pipe(jimp({
        sizes: [
            {"height":40,"width":250}
        ]
    }))
    .pipe(gulp.dest('assets/img/resized_client'));
});