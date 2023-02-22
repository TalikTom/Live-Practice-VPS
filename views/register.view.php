<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>

    <div class="register">
        <h1>Register</h1>
        <p><?= $errorMessage ?></p>

        <form action="/register" method="post" autocomplete="off">
            <div class="flex">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
            </div>

            <div class="flex">
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>

            <div class="flex">
                <label for="email">
                    <i class="fas fa-envelope"></i>
                </label>
                <input type="email" name="email" placeholder="Email" id="email" required>
            </div>

            <input type="submit" value="Register">
        </form>
    </div>

<?php include 'partials/footer.php'; ?>