<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/game.css">
    <script src="js/game.js"></script>
    <title>Game</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="guide">
                    
                </div>
            </div>
            <div class="col">
                <div class="game">
                    <table>
                        <tr>
                            <td id="1" class="field"></td>
                            <td id="2" class="field"></td>
                            <td id="3" class="field"></td>
                        </tr>
                        <tr>
                            <td id="4" class="field"></td>
                            <td id="5" class="field"></td>
                            <td id="6" class="field"></td>
                        </tr>
                        <tr>
                            <td id="7" class="field"></td>
                            <td id="8" class="field"></td>
                            <td id="9" class="field"></td>
                        </tr>
                    </table><br>
                    <button class="btn btn-dark start" onclick="startGame()">Start</button>
                </div>
            </div>
            <div class="col">
                <table class="results" id="results">
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>