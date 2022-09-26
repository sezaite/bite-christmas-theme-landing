const bannerTogglers = document.querySelectorAll('.game-banner-arrow-toggler');
if (bannerTogglers.length) {
    Array.from(bannerTogglers).forEach(toggler => {
        toggler.addEventListener("click", (e)=> {
           toggler.closest(".game-banner").classList.toggle("game-banner--collapsed");
        })
    })
   
}

const clientTogglers = document.querySelectorAll('.toggle-button-text');
if (clientTogglers.length) {
    Array.from(clientTogglers).forEach(toggler => {
        toggler.addEventListener('click', ()=> {
            if (toggler.classList.contains('active')) {
                return
            }
            const previouslyActive = document.querySelector('.toggle-client .toggle-button-text.active');
            previouslyActive.classList.remove('active');
            toggler.classList.add('active');


            // only for presentation purposes:
            if (toggler.classList.contains('toggle-button__right')){
                previouslyActive.innerHTML = 'Esate privatus asmuo?';
            } else {
                toggler.innerHTML="Privatiems klientams"
            }
            setTimeout(()=>{
                location.reload();
            }, 500);
            return;
        })
    })
}
