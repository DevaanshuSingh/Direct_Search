
<?php
$search = $_POST['search'];
$final = "https://youtube.com/results?search_query=";
for ($i = 0; $i < strlen($search); $i++) {
    if ($search[$i] == " ")
        $search[$i] = '+';
}
echo $search;
$final.=$search;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a target="_blank" href="<?php echo $final ?>">Go</a>
</body>
</html>
