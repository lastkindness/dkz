'use strict';

/**
 *  Load modules
 */
import header from './modules/header.js';
import gallerySlider from './modules/gallerySlider.js';
import curvedIMG from './modules/curvedIMG.js';
import popups from './modules/popups.js';
import map from "./modules/map";
import burgerMenu from "./modules/burgerMenu.js";
import horizontalPanel from "./modules/horizontalPanel";
//import fadeContent from "./modules/fadeContent";

$(document).ready(() => {
    header();
    gallerySlider();
    curvedIMG();
    popups();
    map();
    burgerMenu();
    horizontalPanel();
    //fadeContent();
});

