<header>
    <?php
    $login = 'sucess';
    if ($login == 'sucess'):
        ?>
        <div class="alert alert-primary text-center mb-4 small"
             role="alert">Wow, how cool! We found your registration. Open your inbox from your email to reset your password.</div>
    <?php elseif ($login == 'warning'): ?>
        <div class="alert alert-warning text-center mb-4 small"
             role="alert">Sorry, but some problem happened and maybe it's the server. Try again!</div>
    <?php elseif ($login == 'error'): ?>
        <div class="alert alert-danger text-center mb-4 small" role="alert">Email not registered in our system!</div>
    <?php endif; ?>
</header>
<main class="login forgot">
    <div class="container">
        <div class="text-center mt-3">
            <img src="assets/img/logo-blue.png" alt="EMAG Logotype" title="EMAG Logotype">
            <p class="mt-2">Hello, did you lose your password?</p>
            <p><a href="register" class="small">Do not worry! Fill in the fields below to reset your password.</a></p>
        </div>
        <div class="mt-4">
            <form action="#">
                <div class="form-group labelholder" data-label="Email">
                    <label for="email"></label>
                    <input type="email" class="form-control padding-form" id="email" name="email"
                           aria-describedby="email" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Reset Password">
                </div>
            </form>

        </div>
    </div>

</main>