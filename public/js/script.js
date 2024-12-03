document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.getElementById('burgerMenu');
    const sidebar = document.getElementById('sidebar');
    const formContainer = document.getElementById('formContainer');

    burgerMenu.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        formContainer.classList.toggle('shifted');
    });
});
