<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <title>Publi Car 📰 ➕ 🚗</title>
</head>

<body>
    <main class="d-flex align-items-center justify-content-center">
        <div class="card m-5">
            <div class="card-body">
                <h5 class="card-title my-3" style="font-size:2.5rem; text-align:center;">Registro</h5>
                <p class="card-text"></p>
                <form>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="username" class="form-control" />
                        <label class="form-label" for="username">Username</label>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="email" class="form-control" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </form>
            </div>
        </div>
    </main>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
    <script>
        import {
            Input,
            Ripple,
            initMDB
        } from "mdb-ui-kit";

        initMDB({
            Input,
            Ripple
        });
    </script>
</body>

</html>