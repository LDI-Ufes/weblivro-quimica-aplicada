const allImages = document.querySelectorAll('.lightbox-img'),
    lightboxOverlay = document.getElementById('lightbox'),
    lightboxClose = document.getElementById('fecha');

function activateTab() {
    if (document.activeElement.classList.contains('lightbox-img') && event.keyCode == 13) {
        Lightbox(document.activeElement)
    }
}

function Lightbox(target) {
    let imagem = lightboxOverlay.querySelector('img');

    // window.addEventListener('keyup', e => { if (e.key == 'Tab') lightboxClose.focus() });
    window.removeEventListener('keyup', activateTab)
    let VoltaFocusNaImagem = target;

    imagem.src = target.src;
    imagem.alt = target.alt;

    if (target.classList.contains('img-formula')) imagem.classList.add('box-formula');

    let imagemBox = document.querySelector('.img-box'),
        arrasteP = document.querySelector('#lightbox p');

    setTimeout(() => {
        lightboxOverlay.classList.add('show');
        document.body.style.overflow = 'hidden';
        lightboxOverlay.addEventListener('click', e => {
            if (!e.target.matches('img') && !e.target.matches('#lightbox p')) lightboxClose.click();
        })
        imagem.focus();
        document.querySelector('.img-box').classList.add('focus-visible');
        //outro settimeout porque essa verificação if abaixo só funciona depois que a linha anterior ("add('show')") tenha sido executada
        setTimeout(() => {
            (imagemBox.clientWidth < imagem.clientWidth || imagemBox.clientHeight < imagem.clientHeight) ? arrasteP.style.visibility = 'visible' : arrasteP.style.visibility = 'hidden';
        }, 20);

        window.addEventListener('keyup', e => {
            if (e.key == 'Tab' && document.activeElement !== imagem && document.activeElement !== lightboxClose)  setTimeout(() => lightboxClose.focus(), 20);
            
            document.activeElement == imagem ? document.querySelector('.img-box').classList.add('focus-visible') : document.querySelector('.img-box').classList.remove('focus-visible');
        });
    }, 20);

    lightboxClose.addEventListener("click", () => {
        lightboxOverlay.classList.remove('show');
        document.body.style.overflow = 'visible';
        VoltaFocusNaImagem.focus()
        setTimeout(() => {
            window.addEventListener('keyup', activateTab)
        }, 500);
    });

}

allImages.forEach(each => each.addEventListener('click', evt => Lightbox(evt.currentTarget)));

window.addEventListener('keyup', activateTab)