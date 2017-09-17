<header>
    <?php
    $login = '';
    if ($login == 'sucess'):
        ?>
        <div class="alert alert-primary text-center mb-4 small"
             role="alert">Registration successfully reset! We are redirecting to the login page. Wait...</div>
    <?php elseif ($login == 'warning'): ?>
        <div class="alert alert-warning text-center mb-4 small"
             role="alert">Sorry, but some problem happened and maybe it's the server. Try again!</div>
    <?php elseif ($login == 'error'): ?>
        <div class="alert alert-danger text-center mb-4 small"
             role="alert">Please check the fields below. They need to be the same!</div>
    <?php endif; ?>
</header>

<main class="login">
    <div class="container">
        <div class="text-center mt-3">
            <img src="assets/img/logo-blue.png" alt="EMAG Logotype" title="EMAG Logotype">
            <h4 class="mt-4">Hello, Thiago!</h4>
            <p class="small">Now you can restore your password! Fill in the fields below and confirm by pressing the
                reset button.</p>
        </div>
        <div class="mt-4">
            <form action="#">
                <div class="form-group">
                    <label for="password" hidden>Password</label>
                    <input type="password" class="form-control padding-form" id="password" name="password"
                           aria-describedby="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label for="repeat-password" hidden>Repeat Password</label>
                    <input type="password" class="form-control padding-form" id="repeat-password" name="repeat-password"
                           aria-describedby="repeat-password" placeholder="Enter your password again">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Reset Password">
                </div>
            </form>
        </div>
    </div>

</main>