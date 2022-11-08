function login() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    // Check username and password in database
    $.ajax({
        url: 'login.php',
        type: 'get',
        data: { 
            "username": username, 
            "password": password
        },
        success: function(response){
            if(response == "null"){
                alert("ERROR ERROR ERRORO");
            }
            else {
                location.href="games/game.php";
            }
        },
        error: function(xhr){
            alert("ERROR ERROR ERRORO " + xhr);
        }
     });
    //

    //location.href = "games/game.php"
}