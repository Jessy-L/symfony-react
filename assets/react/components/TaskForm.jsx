import React from 'react';

const TaskForm = () => {
    return (
        <form method="post" action="/tasks/create">

            <div>
                <label class="label label-text" for="title">First Name </label>
                <input id="firstName" type="text" id="title" name="title" placeholder="Title" class="input" required />
                <span class="error-message">Please enter your name.</span>
                <span class="success-message">Looks good!</span>
            </div>

            <div class="w-full">
                <label class="label label-text" for="description">Bio</label>
                <textarea class="textarea min-h-20 resize-none" id="description" name="description" required></textarea>
                <span class="error-message">Please write few words</span>
                <span class="success-message">Looks good!</span>
            </div>
            <button type="submit" className="btn btn-primary">Créer</button>
        </form>
    );
};

export default TaskForm;