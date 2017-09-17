<header>
    <?php
    $login = '';
    if ($login == 'sucess'):
        ?>
        <div class="alert alert-primary text-center mb-4 small"
             role="alert">Login done successfully! Please wait...</div>
    <?php elseif ($login == 'warning'): ?>
        <div class="alert alert-warning text-center mb-4 small"
             role="alert">Sorry, but some problem happened and maybe it's the server. Try again!</div>
    <?php elseif ($login == 'error'): ?>
        <div class="alert alert-danger text-center mb-4 small"
             role="alert">Login failed. Please check the fields below!</div>
    <?php endif; ?>
</header>

<main class="login">
    <div class="container">
        <div class="text-center mt-3">
            <img src="assets/img/logo-blue.png" alt="EMAG Logotype" title="EMAG Logotype">
            <p class="mt-2">Fill out the form below to access EMAG2 global grid.</p>
            <p><a href="register" class="small">I do not have a registration</a></p>
        </div>
        <div class="mt-4">
            <form action="#">
                <div class="form-group labelholder" data-label="Username">
                    <label for="username"></label>
                    <input type="text" class="form-control padding-form" id="usename" name="username"
                           aria-describedby="Username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password" hidden>Password</label>
                    <input type="password" class="form-control padding-form" id="password" name="password"
                           aria-describedby="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Login">
                </div>
            </form>
            <p class="text-center mt-4"><a href="forgot" class="small">I forgot my password?</a></p>
        </div>
    </div>

</main>