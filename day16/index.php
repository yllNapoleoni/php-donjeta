<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">

    <style>


        html,
    body {
      height: 100%;
    }


    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }


    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }


    .form-signin .checkbox {
      font-weight: 400;
    }


    .form-signin .form-floating:focus-within {
      z-index: 2;
    }


    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }


    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .form-floating{
        margin: 10px;
    }
    </style>
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="register.php" method="post">
            <img class="mb-4" src="https://app.digitalschool.tech/assets/img/logo.png" width="72" height="57" alt="">
            <h1 class="h3 mb-3 fw-normal">regjistrohu</h1>

            <div class="form-floating">
                <input type="text" id="floatingInput" class="form-control" placeholder="emri" name="emri">
                <label for="floatingInput">emri</label>
            </div>
            <div class="form-floating">
                <input type="text" id="floatingInput" class="form-control" placeholder="username" name="username">
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating">
                <input type="email" id="floatingInput" class="form-control" placeholder="email" name="email">
                <label for="floatingInput">email</label>
            </div>
            <div class="form-floating">
                <input type="password" id="floatingInput" class="form-control" placeholder="password" name="password">
                <label for="floatingInput">password</label>
            </div>
            <div class="form-floating">
                <input type="password" id="floatingInput" class="form-control" placeholder="confirm password" name="confirm password">
                <label for="floatingInput">confirm password</label>
            </div>

            <div class="checkbox bm-3">
                <label">
                <input type="checkbox" value="remember me">
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">sign up</button>
            <span>already have an account:</span><a href="login.php">sign in</a>
        </form>
    </main>
    




</body>
</html>
    