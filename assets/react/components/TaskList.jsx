import React, { useState, useEffect } from 'react';

const TaskList = () => {
    const [tasks, setTasks] = useState([]);

    useEffect(() => {
        fetch('/api/tasks')
            .then(response => response.json())
            .then(data => setTasks(data))
            .catch(error => console.error(error));
    }, []);

    const getStatusBadgeClass = (status) => {
        const statusClasses = {
            'PENDING': 'badge-info',
            'COMPLETED': 'badge-success',
        };
        return `badge badge-soft ${statusClasses[status] || 'badge-info'} text-xs`;
    };

    const renderActionButton = (task) => {
        return task.status == 'PENDING' ? (
            <a href={`/tasks/${task.id}/complete`} className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">Complete</a>
        ) : (
            <a href={`/tasks/${task.id}/delete`} className="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">Delete</a>

            
        );
    };

    return (
        

        <div className="w-full overflow-x-auto mt-16 h-8/10">
            <table className="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
                <tbody>
                {tasks.length > 0 ? (
                    tasks.map((task) => (
                        <tr key={`task-${task.id}`} className="hover">
                            <td className="text-nowrap">{task.id}</td>
                            <td>{task.title}</td>
                            <td>{task.description}</td>
                            <td>
                                <span className={getStatusBadgeClass(task.status)}>
                                    {task.status}
                                </span>
                            </td>
                            <td>{renderActionButton(task)}</td>
                        </tr>
                    ))
                ) : (
                    <tr key="no-tasks">
                        <td colSpan="5" className="text-center">Pas de tâche</td>
                    </tr>
                )}
                </tbody>
            </table>
        </div>
    );
};

export default TaskList;