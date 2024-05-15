<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #02162b;

    }

    .career {
        background-color: #00283a;
    }
</style>

<body>

    <!-- <div class="container my-5">
        <form action="insert.php" method="post" class="col-8 shadow mx-auto p-5">
            <h1 class="text-center mb-3 pb-3">Login</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
                <div class="button text-center mt-4"><input class="btn btn-primary" type="submit" value="Login"></div>
            </div>
        </form>
    </div> -->

    <h1 class="text-center pt-2 text-primary "> Career Consultant </h1>
    <div class="row">
        <form action="insert-career.php" method="post" class=" career text-light col-10 shadow mx-auto my-5 p-5 rounded-5 ">
            <label for=""> Name</label>
            <input class="form-control" name="name" type="text" required>

            <label for="">Number</label>
            <input class="form-control" name="number" type="text" required>

            <label for="">Email</label>
            <input class="form-control" name="email" type="text" required>

            <label for="">What do you need a career consultant for?</label>
            <input class="form-control" name="Q1" type="text" required>



            <div class="button  text-end">
                <button type="submit" class="my-3 btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>