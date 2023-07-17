'use strict';

/**
 *  Load modules
 */
import header from './modules/header.js';
import gallerySlider from './modules/gallerySlider.js';
import curvedIMG from './modules/curvedIMG.js';
import popups from './modules/popups.js';


$(document).ready(() => {
    header();
    gallerySlider();
    curvedIMG();
    popups();
});

