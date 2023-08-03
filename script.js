document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Perform form validation
    if (username.trim() === '') {
        showErrorMessage('Please enter your username');
        return;
    }

    if (password.trim() === '') {
        showErrorMessage('Please enter your password');
        return;
    }

    // Perform authentication
    // Replace this with your authentication logic (e.g., check against database)
    // For demonstration purposes, use a dummy username and password
    var dummyUsername = 'admin';
    var dummyPassword = 'password';

    if (username === dummyUsername && password === dummyPassword) {
        // Redirect to main page upon successful login
        window.location.href = 'main.php';
    } else {
        showErrorMessage('Invalid username or password');
    }
});

function showErrorMessage(message) {
    var errorElement = document.createElement('p');
    errorElement.className = 'error-message';
    errorElement.textContent = message;

    var container = document.querySelector('.login-container');
    container.appendChild(errorElement);
}
