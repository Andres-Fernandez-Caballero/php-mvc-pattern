<? include "head.php"; ?>
<body>
    <header>    
        <h1>Login</h1>
    </header>

    <? include "menu.php"; ?>

    <form>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Enviar">

        <a href="/">GO HOME</a>
    </form>

</body>
</html>