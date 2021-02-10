// import external dependencies
import 'jquery';

// slick slider
import 'slick-carousel/slick/slick';

// Import components
import './components/header/init'
import './components/slider/init';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
