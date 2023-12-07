import dartSass from "sass";
import gulpSass from "gulp-sass";
import rename from "gulp-rename";

import cleanCss from "gulp-clean-css"; // Minify css file
import autoprefixer from "gulp-autoprefixer"; // Autoprefixies for cross-browsering
import groupCssMediaQueries from "gulp-group-css-media-queries"; // Group @media queries

const sass = gulpSass(dartSass);

export const scss = () => {
    return (
        app.gulp
            .src(app.path.src.scss, {sourcemaps: app.isDev})

            .pipe(
                app.plugins.plumber(
                    app.plugins.notify.onError({
                        title: "SCSS",
                        message: "Error: <%= error.message %>",
                    }),
                ),
            )

            .pipe(
                sass({
                    outputStyle: "expanded",
                }),
            )

            .pipe(app.plugins.if(app.isBuild, groupCssMediaQueries()))

            .pipe(
                app.plugins.if(
                    app.isBuild,
                    autoprefixer({
                        grid: true,
                        overrideBrowserslist: ["last 3 versions"],
                        cascade: true,
                    }),
                ),
            )

            // Uncomment if you want unminify style.css
            .pipe(app.plugins.if(app.isDev, app.gulp.dest(app.path.build.css)))

            .pipe(cleanCss())

            .pipe(
                rename({
                    extname: ".min.css",
                }),
            )

            .pipe(app.gulp.dest(app.path.build.css))
    );
};
