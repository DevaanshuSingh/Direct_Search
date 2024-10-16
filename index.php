<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100%;
            width: 100%;
        }

        input {
            width: 50%;
            background-color: rgba(150, 0, 0, .8);
            color: white;
        }
    </style>
</head>

<body>
    <form action="go.php" method="GET" class="frm">
        <label for="search">Please Enter Content You Want To Search In YouTube:</label><br>
        <input type="text" name="search" class="inpt">
        <button >Search</button>
</body>

</html>