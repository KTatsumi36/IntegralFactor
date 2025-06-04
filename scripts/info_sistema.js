
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.info-button-sistema');
    const contents = document.querySelectorAll('.info-content-sistema');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            contents.forEach(c => c.classList.remove('active'));
            const infoType = this.getAttribute('data-info');
            const selectedContent = document.getElementById(infoType + '-content');
            if (selectedContent) {
                selectedContent.classList.add('active');
            }

            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const display = document.getElementById('contentDisplay');
            display.style.opacity = '0.5';
            setTimeout(() => {
                display.style.opacity = '1';
            }, 300);
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.info-button-sistema');
    const contents = document.querySelectorAll('.info-content-sistema');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            contents.forEach(c => c.classList.remove('active'));
            const infoType = this.getAttribute('data-info');
            const selectedContent = document.getElementById(infoType + '-content');
            if (selectedContent) {
                selectedContent.classList.add('active');
            }

            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const display = document.getElementById('contentDisplay');
            display.style.opacity = '0.5';
            setTimeout(() => {
                display.style.opacity = '1';
            }, 300);
        });
    });
});

