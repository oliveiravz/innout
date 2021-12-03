(function () {
    const menuToggle = document.querySelector('.menu-toggle');
    menuToggle.onclick = function (e) {
        const body = document.querySelector('body');
        body.classList.toggle('hide-sidebar');
    }
})()

function addOneSecond(hours, minutes, seconds) {
    const d = new Date();
    d.setHours(parseInt(hours));
    d.setMinutes(parseInt(minutes));
    d.setSeconds(parseInt(seconds) + 1);
    
    const h = `${d.getHours()}`.padStart(2, 0);
    const m = `${d.getMinutes()}`.padStart(2, 0);
    const s = `${d.getSeconds()}`.padStart(2, 0);
    
    return `${h}:${m}:${s}`;
}

function activateClock() {
    const activeClock = document.querySelector('[active-clock]')
    if(!activeClock) return ;
    
    setInterval(function() {
        //split() gera um array a partir de uma string 
        const parts = activeClock.innerHTML.split(':');
        // ... => pega todos as posições do array
        activeClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock();

(function () {
    const confirmDelete = document.querySelectorAll('a[data-confirm]')
    confirmDelete.forEach((element, index) => {
        element.onclick = function(e) {
            let button = confirm('Deletar usuário? Essa ação não poderá ser desfeita!');
            if(button == false) {
                return false
            }
        }
    })
})()