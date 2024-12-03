document.getElementById('burgerMenu').addEventListener('click', function() {
    // Toggle the active class on both the button and sidebar menu
    this.classList.toggle('active');
    document.getElementById('sidebarMenu').classList.toggle('active');
});