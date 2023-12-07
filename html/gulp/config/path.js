import * as nodePath from "path";
const rootFolder = nodePath.basename(nodePath.resolve());

const buildFolder = `../wp-content/themes/onix/frontend`;
const srcFolder = `./assets`;

export const path = {
    build: {
        js: `${buildFolder}/js/`,
        images: `${buildFolder}/img/`,
        icons: `${buildFolder}/icons/`,
        css: `${buildFolder}/css/`,
        fonts: `${buildFolder}/fonts/`,
    },
    src: {
        js: `${srcFolder}/js/app.js`,
        svg: `${srcFolder}/img/**/*.svg`,
        images: `${srcFolder}/img/**/*.*`,
        icons: `${srcFolder}/icons/**/*.*`,
        scss: `${srcFolder}/scss/style.scss`,
        fonts: `${srcFolder}/fonts/**/*.*`,
    },
    watch: {
        js: `${srcFolder}/js/**/*.js`,
        images: `${srcFolder}/img/**/*.*`,
        icons: `${srcFolder}/icons/**/*.*`,
        scss: `${srcFolder}/scss/**/*.scss`,
    },
    clean: buildFolder,
    buildFolder: buildFolder,
    srcFolder: srcFolder,
    rootFolder: rootFolder,
};
