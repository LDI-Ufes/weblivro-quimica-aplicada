const allImages = document.querySelectorAll('img'),
    lightboxOverlay = document.getElementById('lightbox'),
    lightboxClose = document.getElementById('fecha');

function Lightbox(target) {
    fecha.addEventListener("click", () => lightboxOverlay.classList.remove('show'));

    let imagem = lightboxOverlay.querySelector('img');
    imagem.src = target.src;
    imagem.alt = target.alt;

    if (target.classList.contains('img-formula')) imagem.classList.add('box-formula');
    lightboxClose.focus();
    window.addEventListener('keyup', e => { if (e.key == 'Tab') lightboxClose.focus() });

    let imagemBox = document.querySelector('.img-box'),
        arrasteP = document.querySelector('#lightbox p');

    setTimeout(() => {
        lightboxOverlay.classList.add('show');
        lightboxOverlay.addEventListener('click', e => {
            if(!e.target.matches('img') && !e.target.matches('#lightbox p')) fecha.click();
        })

        //outro settimeout porque essa verificação if abaixo só funciona depois que a linha anterior ("add('show')") tenha sido executada
        setTimeout(() => {
            (imagemBox.clientWidth < imagem.clientWidth || imagemBox.clientHeight < imagem.clientHeight) ? arrasteP.style.visibility = 'visible' : arrasteP.style.visibility = 'hidden';
        }, 20);
    }, 30);
}

allImages.forEach(each => each.addEventListener('click', evt => Lightbox(evt.currentTarget)));