<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: red;
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 0, 0, .2);
            background-image: url('youtubeLogo.png');
            background-position: center;

            &>.card {
                font-size: 1rem;
            }
        }

        a {
            text-decoration: none;
            color: black
        }

        span {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $search = $_GET['search'];
    $final = "https://youtube.com/results?search_query=";
    for ($i = 0; $i < strlen($search); $i++) {
        if ($search[$i] == " ")
            $search[$i] = '+';
    }
    $final .= $search;
    ?>
    <div class="card text-center d-flex-row p-5">
        <a target="_blank" href="<?php echo $final ?>" class="btn btn-success h-20"><strong><u>Go For<span><?php echo strtoupper($_GET['search']); ?></u></strong></span></a>
        <?php
        echo "<meta http-equiv='$final' content='ApvK67ociHgr2egd6c2ZjrfPuRs8BHcvSggogIOPQNH7GJ3cVlyJ1NOq/COCdj0+zxskqHt9HgLLETc8qqD+vwsAAABteyJvcmlnaW4iOiJodHRwczovL3lvdXR1YmUuY29tOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2OTUxNjc5OTksImlzU3ViZG9tYWluIjp0cnVlfQ=='>";
        ?>
    </div>
</body>

</html>