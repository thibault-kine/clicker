document.addEventListener('DOMContentLoaded', () => {

    let storage = localStorage;
    
    fetch('../data/player.json')
    .then((res) => res.json)
    .then((res) => console)
    
})