document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        let valid = true;

        // Example validation logic
        const name = document.getElementById('name').value;
        if (name.trim() === '') {
            valid = false;
            alert('Name is required.');
        }

        const email = document.getElementById('email').value;
        if (email.trim() === '' || !email.includes('@')) {
            valid = false;
            alert('Valid email is required.');
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
