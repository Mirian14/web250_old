<main>
<div class="divintro container-contract">
        <div class="tittle-contract">
            <div class="container-main">
                <h2>Login</h2>
            </div>
        </div>
        <div class='container-login'>
            <form class="form" method="POST" >
                <fieldset class="fieldset">
                    <legend>Login here</legend>
                    <div class="line">
                        <div class="description-form-login">
                            <label for="textLogin">Login</label>
                        </div>
                        <div class="value-form">
                            <input type="text" class="field" name="login" id="textLogin">
                        </div>
                    </div>
                    <div class="line">
                        <div class="description-form-login">
                            <label for="txtPassword">Password</label>
                        </div>
                        <div class="value-form">
                            <input type="password" class="field" name="password" id="txtPassword">
                        </div>
                    </div>
                    <div class="line center" >
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn " value="Reset">
                    </div>
                    <?php 
                        if (isset($_POST['login']))
                        {
                            require_once('CRUD.php');
                            if (isset($error_message))
                                echo $error_message;
                        }
                    ?>                    
                </fieldset>
            </form>
            <form action="" class="form" method="post">
                <fieldset class="fieldset">
                    <legend>Please register here:</legend>
                    <div class="line">
                        <div class="description-form-login">
                            <label for="txtName">Your Name</label>
                        </div>
                        <div class="value-form">
                            <input type="text" name="value_name" id="txtName" class="field" required>
                        </div>
                    </div>
                    <div class="line">
                        <div class="description-form-login">
                            <label for="txtLogin">Your Login</label>
                        </div>
                        <div class="value-form">
                            <input type="text" name="value_login" id="txtLogin" class="field" required>
                        </div>
                    </div>
                    <div class="line">
                        <div class="description-form-login">
                            <label for="txtPassword">Password</label>
                        </div>
                        <div class="value-form">
                            <input type="password" name="value_password" id="txtPassword" class="field" required>
                        </div>
                    </div>
                    <div class="line center" >
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn " value="Reset">
                    </div>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        require_once('CRUD.php');
                        $value_name = $_POST['value_name'];
                        $value_login = $_POST['value_login'];
                        $value_password = $_POST['value_password'];
                        $fields = 'name_login, value_login, value_password';
                        $values = "'$value_name', '$value_login','$value_password'";
                        $table = 'login';
                        create($table,$fields,$values);
                    } ?>
                </fieldset>
            </form>
        </div>
    </div>
</main>
