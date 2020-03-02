/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import React from 'react';
import ReactDOM from 'react-dom';
import Home from './component/Home'

ReactDOM.render(
  <Home items={window.REP_LOG_APP_PROPS} />,
  document.getElementById('div-wrapper')
);

