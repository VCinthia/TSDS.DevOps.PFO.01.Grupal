const form = document.getElementById('loginForm');
const responseMsg = document.getElementById('responseMsg');

form.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(form);

    try {
        const response = await fetch('backend.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            responseMsg.textContent = 'Login exitoso';
        } else {
            responseMsg.textContent = 'Error: ' + result.message;
        }
    } catch (error) {
        console.error('Error:', error);
        responseMsg.textContent = 'Ocurrió un error en la conexión.';
    }
});