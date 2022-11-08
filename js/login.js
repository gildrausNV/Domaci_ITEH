function login() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    $.ajax({
        url: 'handler/login.php',
        type: 'get',
        data: { 
            "username": username, 
            "password": password
        },
        success: function(response){
            if(response == "null"){
                alert("GRESKA");
            }
            else {
                location.href="game.php";
            }
        },
        error: function(xhr){
            alert("GRESKA" + xhr.status);
        }
     });
}