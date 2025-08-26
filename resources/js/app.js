/**
 * Main application JavaScript file for the Laravel project.
 * This file acts as the entry point for Vite.
 * All other JavaScript and CSS dependencies should be imported here.
 */

//css
import '../css/app.css';
import '../../public/assets/css/bootstrap.min.css';
import '../../public/assets/css/fontawesome-pro.css';
import '../../public/assets/css/animate.css';
import '../../public/assets/css/slick.css';
import '../../public/assets/css/swiper.min.css';
import '../../public/assets/css/magnific-popup.css';
import '../../public/assets/css/meanmenu.min.css';
import '../../public/assets/css/spacing.css';
import '../../public/assets/css/main.css';

// Import jQuery first, as it's a dependency for many other scripts
// Import Swiper core and its dependencies.
// This path is correct after running `npm install swiper`.
import 'swiper/bundle';

// Import your custom main.js file, which contains your Swiper initializations.
// This must be loaded after Swiper.
// import './main.js';


import 'wowjs/dist/wow.js';



// Import other scripts that you might have from your original setup.
// You can uncomment and add more as needed.
// Vite will automatically find and bundle these from your `node_modules` folder.
// import 'bootstrap/dist/js/bootstrap.bundle.min.js';
// import './bootstrap.bundle.min.js';
// import './wow.js';
// import './beforeafter.jquery-1.0.0.min.js';
// import './ajax-form.js';
// import './counterup.js';
// import './magnific-popup.min.js';
// import './slick.min.js';
// import './meanmenu.min.js';
// import './waypoints.min.js';

console.log('All scripts have been loaded via app.js!');
