(function() {
    console.log("Fichier js bien chargé");

    window.addEventListener('resize', () => {

        console.log("La fenêtre a été redimensionnée");
        if (document.body.clientWidth <= 720) {
            let navELTs = document.getElementsByClassName('js-responsive');
            //let navHeader = document.getElementsByClassName('js-responsive-header');
            //let navFooter = document.getElementsByClassName('js-responsive-footer');
            //let linkResponsiveHeader = document.createElement('li');
            //let linkResponsiveFooter = document.createElement('li');
    
            //linkResponsiveHeader.innerHTML = `<i class="fas fa-bars"></i>`;
            //navHeader[0].appendChild(linkResponsiveHeader);
    
            //linkResponsiveFooter.innerHTML = `<i class="fas fa-bars"></i>`;
            //navFooter[0].appendChild(linkResponsiveFooter);

            for (let i = 0; i < navELTs.length; i++) {
                
                let linkResponsive = document.createElement('div');
                linkResponsive.innerHTML = `<i class="fas fa-bars"></i>`;
                navELTs[i].appendChild(linkResponsive);

            }

        }

    });

})();

