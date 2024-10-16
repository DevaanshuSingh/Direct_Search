<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $search = $_GET['search'];
    // $final = "entered=";
    $final = "https://youtube.com/results?search_query=";
    for ($i = 0; $i < strlen($search); $i++) {
        if ($search[$i] == " ")
            $search[$i] = '+';
    }
    $final .= $search;
    echo "<meta name='$final' content='0' />";
    ?>
    <a target="_blank" href="<?php echo $final ?>">Go</a>
    <?php
    echo " for " . $_GET['search'];
    echo "<meta http-equiv='$final' content='ApvK67ociHgr2egd6c2ZjrfPuRs8BHcvSggogIOPQNH7GJ3cVlyJ1NOq/COCdj0+zxskqHt9HgLLETc8qqD+vwsAAABteyJvcmlnaW4iOiJodHRwczovL3lvdXR1YmUuY29tOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2OTUxNjc5OTksImlzU3ViZG9tYWluIjp0cnVlfQ=='>";
    ?>
</body>

</html>