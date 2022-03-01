let input = document.getElementById('input-nb-mystere');
let nbCoups = 5;
let span = null;
let nbMystere = null;
let bt = null;
let modal = null;

if (null != input) {
    nbMystere = getRandomIntInclusive(0, 50);
    bt = document.getElementById('bt-nb-mystere');
    span = document.getElementById('nb-coups-nb-mystere');
    modal = document.getElementById('defaultModal');
    bt.addEventListener('click', () => {
        if (nbCoups > 0) {
            nbCoups--;
            if (nbCoups == 0) {
                bt.disabled = true;
                document.getElementById('result-nb-mystere').textContent = 'Vous avez perdu';
                document.getElementById('result-text-nb-mystere').textContent = 'Vous avez perdu votre mise de 100 jetons';
                modal.classList.remove('hidden')
            }
            console.log(nbMystere);
            span.textContent = nbCoups;
            if (input.value == nbMystere) {
                sendResult();
                document.getElementById('indicator-nb-mystere').textContent = '(Trouvé)';
                bt.disabled = true;
                document.getElementById('result-nb-mystere').textContent = 'Vous avez gagné';
                modal.classList.remove('hidden')
                document.getElementById('result-text-nb-mystere').textContent = 'Vous avez gagné 200 jetons';
                console.log('trouve');
            } else if (input.value < nbMystere) {
                document.getElementById('indicator-nb-mystere').textContent = '(Plus Grand)';
                console.log('Plus Grand');
            } else if (input.value > nbMystere){
                document.getElementById('indicator-nb-mystere').textContent = '(Plus Petit)';
                console.log('Plus Petit');
            }
        }
    })
}

function sendResult() {
    const url = '/nb-mystere/victory';
    fetch(url)
    .then((response) => response.json())
    .then((data) => console.log(data))
}

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
  }
