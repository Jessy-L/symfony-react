import React from 'react';

const TaskForm = () => {
    return (
        <form method="post" action="/tasks/create">
            <div className="form-group">
                <label htmlFor="title">Title</label>
                <input type="text" className="form-control" id="title" name="title" required />
            </div>
            <div className="form-group">
                <label htmlFor="description">Description</label>
                <textarea className="form-control" id="description" name="description" required></textarea>
            </div>
            <button type="submit" className="btn btn-primary">Créer</button>
        </form>
    );
};

export default TaskForm;