import {hamburger} from "./modules/header.js";
import {ajaxOpenTabs} from "./modules/tabs-ajax.js";

hamburger();

document.addEventListener("DOMContentLoaded", function () {
    ajaxOpenTabs();
});
