const clearButton = document.getElementById('clearBtn');
const tasks = document.querySelectorAll('.task');


tasks.forEach(task => {
    const deleteButton = task.querySelector('.delete-button');
    const taskId = task.querySelector('.task-checkbox').id;
    const checkbox = task.querySelector('.task-checkbox');

    deleteButton.addEventListener('click', function () {
        console.log(taskId);
        fetch(`/tasks/${taskId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
        task.remove();
    });

    checkbox.addEventListener('click', function () {
        fetch(`/tasks/${taskId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
    });

});

clearButton.addEventListener('click', function () {
    fetch('/tasks/', {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    }).then(response => {
        if (response.ok) {
            location.reload();
        }
    })

});

