/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import 'tailwindcss/tailwind.css'
import "flyonui/flyonui"

import FlyonUI from 'flyonui';
import React from 'react';
import { createRoot } from 'react-dom/client';

import Exemple from './react/components/Exemple';
import Header from './react/components/Header';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('react-app');
    if (container) {
      const root = createRoot(container);
      root.render(<Exemple />);
    }

    const header = document.getElementById('header');
    if (header) {
      const root = createRoot(header);
      root.render(<Header />);
    }

});