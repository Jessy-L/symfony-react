import React from 'react';

const TaskForm = () => {
    return (
        <form method="post" action="/tasks/create">
            <div className="max-w-xl mx-auto mt-16 flex w-full flex-col border rounded-lg bg-white p-8">
                <h2 className="title-font mb-1 text-lg font-medium text-gray-900">Création de tâche</h2>
                <div className="mb-4">
                    <label for="title" className="text-sm leading-7 text-gray-600">Titre de la tâche</label>
                    <input type="text" id="title" name="title" className="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                </div>
                <div className="mb-4">
                    <label for="message" className="text-sm leading-7 text-gray-600">Corps de la tâche</label>
                    <textarea id="description" name="description" className="h-32 w-full resize-none rounded border border-gray-300 bg-white py-1 px-3 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
                </div>
                <button className="rounded border-0 bg-indigo-500 py-2 px-6 text-lg text-white hover:bg-indigo-600 focus:outline-none">Créer</button>
            </div>
        </form>
    );
};

export default TaskForm;