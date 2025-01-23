import React from 'react';

const TaskList = ({ tasks }) => {
    return (
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
                {tasks.map((task) => (
                    <tr key={task.id}>
                        <td>{task.id}</td>
                        <td>{task.title}</td>
                        <td>{task.description}</td>
                        <td>{task.status}</td>
                        <td>
                            <a href={`/tasks/${task.id}/complete`} className="btn btn-success">Complete</a>
                        </td>
                    </tr>
                ))}
            </tbody>
        </table>
    );
};

export default TaskList;