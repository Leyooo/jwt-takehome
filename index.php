<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
<section>
  <div>
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <h3>Login</h3>
                        </div>
                        <div>
                            <form id="formLogin" method="post" action = "php/login.php">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname" id="uname" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="pass" name = "pass" required autocomplete="new-password">
                                </div>
                                <button type="submit" id="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</body>
</html>