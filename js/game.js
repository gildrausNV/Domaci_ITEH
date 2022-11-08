let generatedFields = [];
let userFields = [];
let started = false;
let points = 0;

document. addEventListener('DOMContentLoaded', function() { 
    getResults();
    let currentIndex = 0;
    for (let i = 1; i < 10; i++){
        document.getElementById("" + i).addEventListener("click", function (){
            if(started == false){
                return;
            }
            if (generatedFields[currentIndex] == i) {
                userFields.push(i);
                currentIndex++;
                points += 2;
                document.getElementById("" + i).classList.add("correct");
                setTimeout(function () {
                    document.getElementById("" + i).classList.remove("correct");
                }, 1000);
            } else {
                alert("Imas lose pamcenje 🤔");
                document.getElementById("" + i).classList.add("error");
                setTimeout(function () {
                    document.getElementById("" + i).classList.remove("error");
                    currentIndex = 0;
                    started = false;
                    saveResult();
                }, 1000);
            }
            if (currentIndex == 5) {
                alert("BRAVOO 🎉");
                currentIndex = 0;
                started = false;
                saveResult();
            }
        });
    }
});

function startGame() {
    generatedFields = [];
    
    points = 0;

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
            started = true;
            return;
        }

        document.getElementById("" + generatedFields[i - 1]).classList.remove("highlight");
        document.getElementById("" + generatedFields[i]).classList.add("highlight");
        i++;
        
    }, 1000);
}

function saveResult(){
    $.ajax({
        url: 'handler/saveResult.php',
        type: 'post',
        data: { 
            "poeni": points
        },
        success: function(response){
            getResults();

        },
        error: function(xhr){
            alert("GRESKA" + xhr);
        }
     });
}

function getResults(){
    $.ajax({
        url: 'handler/getResults.php',
        type: 'get',
        success: function(response){
            if(response == "") {
                document.getElementById("results").innerHTML = "";
                return;
            }
            let j=0;
            let arr = [];
            arr=response.split("\"\"");
            for(let k = 0;k<arr.length;k++ ){
                arr[k]=arr[k].replaceAll('\"', '');
            }
            html = "";
            for (let i = 0; i < arr.length; i++) {
                let id = arr[i].split("|")[0];
                let u = arr[i].split("|")[1];
                let p = arr[i].split("|")[2];
                html += "<tr>\
                    <td>" + u + "</td>\
                    <td>" + p + "</td>\
                    <td>" + "<button class=\"btn btn-dark\" onclick=\"remove(" + id + ")\">Remove</button>" + "</td>\
                </tr>";
            }
            document.getElementById("results").innerHTML = html;
        },
        error: function(xhr){
            alert("GRESKA" + xhr.status);
        }
     });
}

function remove(id) {
    $.ajax({
        url: 'handler/deleteResult.php',
        type: 'post',
        data: { 
            "id": id
        },
        success: function(response){
            getResults();
        },
        error: function(xhr){
            alert("GRESKA" + xhr.status);
        }
     });
}
