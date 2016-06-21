<?php
    App::getHead('Login');
    App::getModal();
?>
<body>
    <div class="container-fluid">
        <div id="formlogin" class="col s6">
            <form id="login_form" class="col s12 m12">
                <div class="row">
                    <div id="backgroundtitle" class="col s12">
                        <h4> Inicio de Sesion</h4>
                    </div>
                </div>
                <div id="result"></div>
                <div class="row">
                    <div class="input-field col s11 center">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="email" type="email" class="validate" required name="correo">
                        <label for="email" data-error="email invalido">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s11">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" type="password" class="validate" name="password"required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <p id="checkboxlogin" class="col s11">
                        <input type="checkbox" id="checklogin" />
                        <label for="checklogin">Recordar Contraseña</label>
                    </p>
                </div>
                <div class="row">
                    <p class="center col s12">
                        <button id="buttonaccess" class="btn waves-effect waves-light" type="submit" name="action">Acceder</button>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- this part is the script to use -->
    <script>
        $(document).ready(function () {
            Materialize.updateTextFields();
            $('#login_form').submit(function()
            {
                var data = $('#login_form').serialize();
                login('?post=login', data, result, $('#myModal'), $('#message'));
                return false;
            });
        });
    </script>
    <script src="js/login.js">
    </script>
</body>

</html>
