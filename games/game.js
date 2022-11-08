let generatedFields = [];
let userFields = [];
let started = false;
let points = 0;

document. addEventListener('DOMContentLoaded', function() { 
    let currentIndex = 0;
    for (let i = 1; i < 10; i++){
        document.getElementById("" + i).addEventListener("click", function (){
            if(started == false){
                alert("Imas lose pamcenje 🤔");
                return;
            }
            if (generatedFields[currentIndex] == i) {
                userFields.push(i);
                currentIndex++;
                document.getElementById("" + i).classList.add("correct");
                setTimeout(function () {
                    document.getElementById("" + i).classList.remove("correct");
                }, 1000);
            } else {
                document.getElementById("" + i).classList.add("error");
                setTimeout(function () {
                    document.getElementById("" + i).classList.remove("error");
                    currentIndex = 0;
                    started = false;
                }, 1000);
            }
            if (currentIndex == 5) {
                alert("BRAVOO 🎉");
                currentIndex = 0;
            }
        });
    }
});

function startGame() {
    generatedFields = [];
    started = true;

    for (let i = 0; i < 5; i++) {
        generatedFields.push(Math.floor(Math.random() * 8 ) + 1);
    }

    let i = 0;
    document.getElementById("" + generatedFields[i]).classList.add("highlight");
    i++;

    let interval = setInterval(function () {
        if (i == 5) {
            document.getElementById("" + generatedFields[i - 1]).classList.remove("highlight");
            clearInterval(interval);
            return;
        }

        document.getElementById("" + generatedFields[i - 1]).classList.remove("highlight");
        document.getElementById("" + generatedFields[i]).classList.add("highlight");
        i++;
        
    }, 1000);
}
