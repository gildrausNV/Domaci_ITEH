<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script src="login.js"></script>
</head>
<body>
    <div class="container">
        <div class="login-form" id="login-form">
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="" id="username"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="" id="password"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td colspan="2"><button class="btn btn-dark" onclick="login()">Login</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>