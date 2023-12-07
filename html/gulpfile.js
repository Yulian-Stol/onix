// Main module
import gulp from "gulp";
// Path import
import {path} from "./gulp/config/path.js";
// Import plugins
import {plugins} from "./gulp/config/plugins.js";

// Put variables in global variable
global.app = {
    isBuild: process.argv.includes("--build"),
    isDev: !process.argv.includes("--build"),
    path: path,
    gulp: gulp,
    plugins: plugins,
};

// Task import
import {reset} from "./gulp/tasks/reset.js";
import {scss} from "./gulp/tasks/scss.js";
import {js} from "./gulp/tasks/js.js";
import {images} from "./gulp/tasks/images.js";
import {icons} from "./gulp/tasks/icons.js";
import {fonts} from "./gulp/tasks/fonts.js";

// Make watcher that will reload files automatically
function watcher() {
    gulp.watch(path.watch.scss, scss);
    gulp.watch(path.watch.js, js);
    gulp.watch(path.watch.images, images);
    gulp.watch(path.watch.icons, icons);
}

const mainTasks = gulp.parallel(scss, js, images, icons, fonts);

// Make gulp scripts that will be triggered by "gulp" in Terminal
const dev = gulp.series(reset, mainTasks, watcher);
const build = gulp.series(reset, mainTasks);

export {dev};
export {build};

// Run script by default
gulp.task("default", dev);
