/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import 'tailwindcss/tailwind.css';

import React from 'react';
import { createRoot } from 'react-dom/client';
import Header from './react/components/Header';
import Footer from './react/components/Footer';
import TaskList from './react/components/TaskList';
import TaskForm from './react/components/TaskForm';
import TaskDelete from './react/components/TaskDelete';
import TaskComplete from './react/components/TaskComplete';

// Sample data for TaskList
// const tasks = [
//     { id: 1, title: "Task 1", description: "Description 1", status: "Pending" },
//     { id: 2, title: "Task 2", description: "Description 2", status: "Completed" }
// ];

const initializeReactComponent = (component, props = {}, containerId) => {
    const container = document.getElementById(containerId);
    if (container) {
        const root = createRoot(container);
        root.render(React.createElement(component, props));
    }
};

// Initialize components
initializeReactComponent(Header, { title: "TODO" }, "react-header");
initializeReactComponent(Footer, {}, "react-footer");
initializeReactComponent(TaskList, {}, "react-task-list");
initializeReactComponent(TaskForm, {}, "react-task-form");
initializeReactComponent(TaskComplete, {}, "react-task-complete");
initializeReactComponent(TaskDelete, {},"react-task-delete");
