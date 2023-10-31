

  // TABLET
function handleTabletScreen(event) {
    if (event.matches) {
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
            let slides = document.querySelectorAll(".mySlides");
            
            slideIndex++;
            
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            
            let translateValue = -925 * slideIndex; // Ancho de la diapositiva multiplicado por el índice
            
            document.querySelector(".slideshow-inner").style.transform = `translateX(${translateValue}px)`;
            
            setTimeout(showSlides, 2000); // Cambia de diapositiva cada 2 segundos (ajusta según tus necesidades)
        }
    } else {
      // Puedes hacer algo si la media query deja de cumplirse
    }
  }
  
  // CELULAR
  function handleMobileScreen(event) {
    if (event.matches) {
        if (event.matches) {
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
                let slides = document.querySelectorAll(".mySlides");
                
                slideIndex++;
                
                if (slideIndex >= slides.length) {
                    slideIndex = 0;
                }
                
                let translateValue = -421  * slideIndex; // Ancho de la diapositiva multiplicado por el índice
                
                document.querySelector(".slideshow-inner").style.transform = `translateX(${translateValue}px)`;
                
                setTimeout(showSlides, 2000); // Cambia de diapositiva cada 2 segundos (ajusta según tus necesidades)
            }
            
        } else {
          // Puedes hacer algo si la media query deja de cumplirse
        }
    } else {
      // Puedes hacer algo si la media query deja de cumplirse
    }
  }
  
  // PC
  function handlePCScreen(event) {
    if (event.matches) {
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
            let slides = document.querySelectorAll(".mySlides");
            
            slideIndex++;
            
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            
            let translateValue = -840 * slideIndex; // Ancho de la diapositiva multiplicado por el índice
            
            document.querySelector(".slideshow-inner").style.transform = `translateX(${translateValue}px)`;
            
            setTimeout(showSlides, 2000); // Cambia de diapositiva cada 2 segundos (ajusta según tus necesidades)
        }
    } else {
      // Puedes hacer algo si la media query deja de cumplirse
    }
  }
  

  // TABLET
  const tabletMediaQuery = window.matchMedia("(min-width: 768px)");
  tabletMediaQuery.addListener(handleTabletScreen);
  handleTabletScreen(tabletMediaQuery);

   // CELULAR
  const mobileMediaQuery = window.matchMedia("(max-width: 767px)");
  mobileMediaQuery.addListener(handleMobileScreen);
  handleMobileScreen(mobileMediaQuery);

  // PC
  const pcMediaQuery = window.matchMedia("(min-width: 991px)");
  pcMediaQuery.addListener(handlePCScreen);
  handlePCScreen(pcMediaQuery);


