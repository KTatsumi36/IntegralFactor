document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.material-button');
    const contents = document.querySelectorAll('.material-content');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            contents.forEach(c => c.classList.remove('active'));
            const materialType = this.getAttribute('data-material');
            const selectedContent = document.getElementById(materialType + '-content');
            if (selectedContent) {
                selectedContent.classList.add('active');
            }

            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            document.getElementById('contentDisplay').scrollIntoView({
                behavior: 'smooth'
            });

            const display = document.getElementById('contentDisplay');
            display.style.opacity = '0.5';
            setTimeout(() => {
                display.style.opacity = '1';
            }, 300);
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.material-button');
    const contents = document.querySelectorAll('.material-content');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            contents.forEach(c => c.classList.remove('active'));
            const materialType = this.getAttribute('data-material');
            const selectedContent = document.getElementById(materialType + '-content');
            if (selectedContent) {
                selectedContent.classList.add('active');
            }

            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            document.getElementById('contentDisplay').scrollIntoView({
                behavior: 'smooth'
            });

            const display = document.getElementById('contentDisplay');
            display.style.opacity = '0.5';
            setTimeout(() => {
                display.style.opacity = '1';
            }, 300);
        });
    });
});

