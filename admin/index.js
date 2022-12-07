const dd_menu = document.querySelector('#dd_menu');
const menu= document.querySelector('#menu');

dd_menu.addEventListener('click', () => {
    if (menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    } 
    else{
        menu.classList.add('hidden');
    }
})