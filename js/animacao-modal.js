function iniciaModal(idModal){
    const modal = document.getElementById(idModal);
    if(modal){
        modal.classList.add('mostrar');
        modal.addEventListener('click', (e) => {
            if(e.target.id == idModal || e.target.id =='bt-fechar-modal'){
                modal.classList.remove('mostrar');
            }
    
            console.log(e.target.id);
        });
    }

}

const entrar = document.querySelector('.bt-menu-entrar');
entrar.addEventListener('click', () => iniciaModal('modal'));
console.log(entrar);

