<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"></link>
  </head>
  <body>

    <div class="signup">
        <form action="register.php" class="form-signup" method="post">

        <h1 class="h3 mb-3 font-weight-normal">please sign up</h1>

        <label for="inputEmail" class="sr-only ">Name</label>
        <input type="text" id="input-Email" class="form-control" placeholder="name" name="name" require autofocus>

        <label for="inputEmail" class="sr-only ">surname</label>
        <input type="text" id="input-Email" class="form-control" placeholder="surname" name="surname" require autofocus>

        <label for="inputEmail" class="sr-only ">username</label>
        <input type="text" id="input-Email" class="form-control" placeholder="username" name="username" require autofocus>

        <label for="inputEmail" class="sr-only ">email</label>
        <input type="text" id="input-Email" class="form-control" placeholder="email" name="email" require autofocus>

        <label for="inputEmail" class="sr-only ">password</label>
        <input type="text" id="input-Email" class="form-control" placeholder="password" name="password" require autofocus>





        <button class="btn bnt-lg btn-primary bnt_block mt-3" type="submit" name="submit">sign up</button>


        <small>already have an account? <a href="main.php"> log in </a></small>
        <p class="mt-5 mb-3 text-muted">digital school &copy; 2025</p>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>