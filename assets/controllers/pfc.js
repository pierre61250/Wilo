const buttons = document.querySelectorAll("button");

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function () {
        const joueur = buttons[i].innerHTML;
        const robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;
        let resultat = "";
        if (robot === "Ciseaux") {
            document.getElementById("ciseauxOrdi").style.display = "initial";
        } else if (robot === "Feuilles") {
            document.getElementById("papierOrdi").style.display = "initial";
        } else if (robot === "Pierre") {
            document.getElementById("pierreOrdi").style.display = "initial";
        }
        if (joueur === robot) {
            resultat = "Egalité";
        }
        else if ((joueur === "Pierre" && robot === "Ciseaux") || (joueur === "Ciseaux" && robot === "Feuilles") || (joueur === "Feuilles") && (robot === "Pierre")) {
            resultat = "Gagné";
        }
        else {
            resultat = "Perdu";
        }
        document.querySelector(".resultat").innerHTML = `
            Vous : ${joueur} </br>
            Ordi : ${robot} <br/>
            Résultat : ${resultat}`;
    });
}