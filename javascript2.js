document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            alert('Room selected: ' + this.parentElement.parentElement.querySelector('.description h3').innerText);
        });
    });
});
