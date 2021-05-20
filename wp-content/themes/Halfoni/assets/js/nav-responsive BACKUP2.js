(function() {
    console.log("Fichier js bien chargé");

    window.addEventListener('resize', () => {

        let navELTs = document.getElementsByClassName('js-responsive');
        let responsiveShowElts = document.getElementsByClassName('js-responsive-show');
        let buttonResponsiveHeaderELT = document.querySelector('#js-button-responsive-header');
        let buttonResponsiveFooterELT = document.querySelector('#js-button-responsive-footer');
        let containerELT = document.getElementsByClassName('site__shop');

        console.log("La fenêtre a été redimensionnée");
        if (document.body.clientWidth <= 720) {

            for (let i = 0; i < navELTs.length; i++) {

                //navELTs[i].classList.add('hide');
                navELTs[i].style.display = 'none';

                responsiveShowElts[i].style.display = 'block';
                responsiveShowElts[i].style.right = 50 + 'px';
                responsiveShowElts[i].style.cursor = 'pointer';

            }

            buttonResponsiveHeaderELT.addEventListener('click', () => {
                
                navELTs[0].style.display = 'flex';
                navELTs[0].classList.add('show');
                //containerELT.classList.add('blur');
                buttonResponsiveHeaderELT.style.display = 'none';

            });

            buttonResponsiveFooterELT.addEventListener('click', () => {
                
                navELTs[1].style.display = 'flex';
                buttonResponsiveFooterELT.style.display = 'none';

            });

        } else {

            for(let i = 0; i < navELTs.length; i++) {

                //navELTs[i].classList.remove('hide');
                navELTs[i].style.display = 'flex';

                responsiveShowElts[i].style.display = 'none';
                responsiveShowElts[i].style.cursor = 'none';

            }

        }

    });

})();

