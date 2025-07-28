<?
require_once COMPONENTS . '\header.php';
?>

<main class="container py-3">
    <div class="row">
        <div class="col-9">
            <h3><?=$header ?? ""?></h3>
            <form action="store" method="POST">
                <!-- Логин пользователя -->
                <div class="mb-3">
                    <label for="login" class="form-label">Login:</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Enter your username">
                </div>
                
                <!-- Email пользователя -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                
                <!-- Пароль пользователя -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>

                <!-- Повтор пароля -->
                <div class="mb-3">
                    <label for="repeat-password" class="form-label">Confirm password:</label>
                    <input type="text" class="form-control" id="repeat-password" name="repeat-password" placeholder="Confirm password">
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</main>

<?
require_once COMPONENTS . '\footer.php';
?>