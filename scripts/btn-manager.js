document.addEventListener('DOMContentLoaded', () => {

    const buttons = {
        'start': document.querySelector('#start-button'),
        'back': document.querySelector('#back'),
    };


    buttons.start.addEventListener('click', () => {
        let parent = buttons.start.parentElement;
        let form = document.querySelector('form#user-sign-in');

        // si on cache le menu, on montre le bouton #back et vice-versa
        if(parent.classList.contains('hidden')) {
            parent.classList.remove('hidden');
            buttons.back.classList.add('hidden');
            if(form != null) {
                form.classList.add('hidden');
            } 
        }
        else {
            parent.classList.add('hidden');
            buttons.back.classList.remove('hidden');
            if(form != null) {
                form.classList.remove('hidden');
            }
        }
    })


    buttons.back.addEventListener('click', () => {
        let menu = document.querySelector('div#menu');
        let form = document.querySelector('form#user-sign-in');
        
        if(!buttons.back.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            buttons.back.classList.add('hidden');
            if(form != null) {
                form.classList.add('hidden');
            }
        }
    })
})