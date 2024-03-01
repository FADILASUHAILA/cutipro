document.addEventListener("DOMContentLoaded", function () {
    const toggleSwitch = document.querySelector('.toggle-switch');
    const body = document.querySelector('body');

    toggleSwitch.addEventListener('click', function () {
        body.classList.toggle('dark-mode');
        toggleSwitch.classList.toggle('dark-mode-text');
    });
});
