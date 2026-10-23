const links = document.querySelectorAll('.nav-links a');

links.forEach(function (link) {
    link.addEventListener('click', function () {
        links.forEach(function (item) {
            item.classList.remove('ativo');
        });
        link.classList.add('ativo');
    });
});
