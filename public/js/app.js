const checkboxes = document.querySelectorAll('.task-checkbox');

checkboxes.forEach(checkbox => {
    checkbox.addEventListener('click', function () {
        fetch(`/tasks/${this.id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
    })
});
