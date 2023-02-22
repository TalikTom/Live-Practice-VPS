<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>

    <main class="center-grid margin-top">
        <form action="/authorization" method="post">
            <label for="username">Username</label>
            <input type="text" name="username"
                   value=""
                   placeholder="username" id="">
            <label for="password">Password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Login">
        </form>
        <a href="/register">Register here</a>
    </main>

<?php include 'partials/footer.php'; ?>