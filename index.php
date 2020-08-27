<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Username Availability Checking using jQuery Ajax and PHP Demo1</title>
    <meta name="description" content="Comprobar disponibilidad de nombre de usuario en vivo." />
    <meta name="author" content="Jose Aguilar">
    <link rel="shortcut icon" href="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/favicon.ico" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#username').on('blur', function () {
                $('#result-username').html('<img src="images/loader.gif" />').fadeOut(1000);

                var username = $(this).val();
                var dataString = 'username=' + username;

                $.ajax({
                    type: "POST",
                    url: "check_username_availablity.php",
                    data: dataString,
                    success: function (data) {
                        $('#result-username').fadeIn(1000).html(data);
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="container">

        <div class="row">
            <div id="content" class="col-lg-12">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Introduce tu nombre...">
                        <div id="result-username"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Escribe tu password aqui...">
                    </div>
                </form>
            </div>
        </div>





</body>

</html>