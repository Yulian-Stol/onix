export const icons = () => {
    return app.gulp
        .src(app.path.src.icons)

        .pipe(
            app.plugins.plumber(
                app.plugins.notify.onError({
                    title: "JS",
                    message: "Error: <%= error.message %>",
                }),
            ),
        )

        .pipe(app.gulp.dest(app.path.build.icons));
};
