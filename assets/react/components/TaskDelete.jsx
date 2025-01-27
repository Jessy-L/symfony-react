import React from 'react';

const TaskDelete = () => {
    return (
        <div className="max-w-xl mx-auto mt-16 flex w-full flex-col border rounded-lg bg-white p-8">
            <p>La tâche a été supprimée avec succès.</p>
            <a href="/" className="btn btn-primary">Retour à la liste</a>
        </div>
    );
};

export default TaskDelete;