const button = document.querySelector('.btn-primary');

if (button) {
    button.addEventListener('click', function (e) {
        e.preventDefault();

        const aboutSection = document.querySelector('#about');
        if (aboutSection) {
            aboutSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
}
