import React from 'react';

const TaskComplete = () => {
    return (
        <div>
            <p>La tâche a été complétée avec succès.</p>
            <a href="/tasks" className="btn btn-secondary">Retour à la liste</a>
        </div>
    );
};

export default TaskComplete;