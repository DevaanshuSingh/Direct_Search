<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        label {
            cursor: pointer;

            &>img {
                height: 3%;
                width: 8%;
            }
        }

        body {
            background-color: rgba(255, 0, 0, .1);

        }
    </style>
</head>

<body>
    <form action="go.php" class="form-group rounded" method="GET">
        <div class="card text-center d-flex-row m-5">
            <div class="card-body">
                <h5 class="card-title">
                    <label for="search"> Please Enter Content You Want To Search In:
                        <img src="youtubeLogo.png" alt="YouTube Logo">
                    </label>
                </h5>
                <input type="text" name="search" id="search" class="col-12 m-2">
                <button class="btn btn-danger p-2"><i>Go You..</i></button>
            </div>
            <div class="card-footer text-body-secondary">
                <strong>Without Any Distraction Direct Search And Consume Contents</strong>
            </div>
        </div>
    </form>
</body>

</html>