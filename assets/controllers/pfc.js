const buttons = document.querySelectorAll("button");
var pointsPlayer = 0;
var pointsOrdi = 0;

document.getElementById("scorePlayer").innerHTML=pointsPlayer;
document.getElementById("scoreOrdi").innerHTML=pointsOrdi;

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function () {
        const joueur = buttons[i].innerHTML;
        const robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;
        let resultat = "";
        if (robot === "Ciseaux") {
            document.getElementById("ciseauxOrdi").style.display = "none";
            document.getElementById("papierOrdi").style.display = "none";
            document.getElementById("pierreOrdi").style.display = "none";
            document.getElementById("ciseauxOrdi").style.display = "initial";
        } else if (robot === "Feuilles") {
            document.getElementById("papierOrdi").style.display = "none";
            document.getElementById("ciseauxOrdi").style.display = "none";
            document.getElementById("pierreOrdi").style.display = "none";
            document.getElementById("papierOrdi").style.display = "initial";
        } else if (robot === "Pierre") {
            document.getElementById("pierreOrdi").style.display = "none";
            document.getElementById("ciseauxOrdi").style.display = "none";
            document.getElementById("papierOrdi").style.display = "none";
            document.getElementById("pierreOrdi").style.display = "initial";
        }
        if (joueur === robot) {
            resultat = "Egalité";
        }
        else if ((joueur === "Pierre" && robot === "Ciseaux") || (joueur === "Ciseaux" && robot === "Feuilles") || (joueur === "Feuilles") && (robot === "Pierre")) {
            resultat = "Gagné";
            pointsPlayer++;
        }
        else {
            resultat = "Perdu";
            pointsOrdi++;
        }
        if (pointsPlayer == 3) {
            resultat = "Gagné";
            result(resultat);
        } else if (pointsOrdi == 3) {
            resultat = "Perdu";
            result(resultat);
        }
        document.getElementById("scorePlayer").innerHTML=pointsPlayer;
        document.getElementById("scoreOrdi").innerHTML=pointsOrdi;
    });
}

function result(result) {

    disabled();

    const expires = new Date(Date.now() + 1000).toUTCString();
    var userData = document.querySelector('.connectOrNot');
    var userID = userData.dataset.user;

    console.log(result);

    pointsOrdi = 0;
    pointsPlayer = 0;

    document.cookie = `result=`+result+`; expires=${expires}`;
    document.cookie = `id=`+userID+`; expires=${expires}`;
    document.cookie = `mise=`+100+`; expires=${expires}`;
    location.href = "/resultat";

}

function disabled() {
document.getElementById("btnPierre").disabled = true;
document.getElementById("btnFeuille").disabled = true;
document.getElementById("btnCiseaux").disabled = true;
document.getElementById("btnPierre").style.background = "grey";
document.getElementById("btnFeuille").style.background = "grey";
document.getElementById("btnCiseaux").style.background = "grey";
}