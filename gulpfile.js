var gulp = require("gulp");
var liverelaod = require("gulp-livereload");
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;


/*// 静态服务器
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    //gulp.watch("app/scss/!*.scss", ['sass']);
    gulp.watch([
        "static/css/!*.css",
        "css/!*.css",
        "**!/!*.html"
    ]).on('change', reload);
});*/

// 代理

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "adv.local.com"
    });

    //gulp.watch("app/scss/!*.scss", ['sass']);
    gulp.watch([
        "huo15template/css/*.css",
        "*.php",
        "vip/*.php",
        "system/*.php",
        "alipayDemo/*.php",
        "wechatPay/*.php",
        "wechatPay/example/*.php",
        "**!/!*.php"
    ]).on('change', reload);
});



/*
//livereload
gulp.task('watch', function() {
    //启动liverelaod 监听
    liverelaod.listen();

    //只监听html文件
    gulp.watch('./h5bp/!*.html', function (file) {
        console.log(file);
        gulp.src(file.path).pipe(liverelaod());
    });

});
*/


