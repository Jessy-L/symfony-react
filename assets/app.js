/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
<<<<<<< HEAD
import 'tailwindcss/tailwind.css';
=======
import 'tailwindcss/tailwind.css'
import "flyonui/flyonui"
>>>>>>> cabd853ab4176bbe9554626a63289200413b031f

import FlyonUI from 'flyonui';
import React from 'react';
import { createRoot } from 'react-dom/client';
<<<<<<< HEAD
import Button from './react/components/Button';
import Header from './react/components/Header';
import TaskList from './react/components/TaskList';
import TaskForm from './react/components/TaskForm';
import TaskComplete from './react/components/TaskComplete';

// Sample data for TaskList
const tasks = [
    { id: 1, title: "Task 1", description: "Description 1", status: "Pending" },
    { id: 2, title: "Task 2", description: "Description 2", status: "Completed" }
];

const initializeReactComponent = (component, props = {}, containerId) => {
    const container = document.getElementById(containerId);
    if (container) {
        const root = createRoot(container);
        root.render(React.createElement(component, props));
    }
};

// Initialize components
initializeReactComponent(Header, { title: "Liste des tâches" }, "react-header");
initializeReactComponent(TaskList, { tasks }, "react-task-list");
initializeReactComponent(TaskForm, {}, "react-task-form");
initializeReactComponent(TaskComplete, {}, "react-task-complete");
initializeReactComponent(Button, { label: "Click Me" }, "react-button");
=======

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
>>>>>>> cabd853ab4176bbe9554626a63289200413b031f
