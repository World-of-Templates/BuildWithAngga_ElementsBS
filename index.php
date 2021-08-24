<?php

$content_total = iterator_count(new FilesystemIterator("content/"));
$empty_total = iterator_count(new FilesystemIterator("empty/"));
$footer_total = iterator_count(new FilesystemIterator("footer/"));
$header_total = iterator_count(new FilesystemIterator("header/"));
$navbar_total = iterator_count(new FilesystemIterator("navbar/"));

?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Build With Angga Elements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">NavBar</h1>
<?php
    for ($i=1; $i<=$navbar_total; $i++){
        echo "<h4 class='text-center'>NavBar type ".$i."</h4>";
        include "navbar/navbar".$i.".html";
    }
?>

<h1 class="text-center">Header</h1>
<?php
for ($i=1; $i<=$header_total; $i++){
    echo "<h4 class='text-center'>Header type ".$i."</h4>";
    include "header/header".$i.".html";
}
?>

<h1 class="text-center">Content</h1>
<?php
for ($i=1; $i<=$content_total; $i++){
    echo "<h4 class='text-center'>Content type ".$i."</h4>";
    include "content/content".$i.".html";
}
?>

<h1 class="text-center">Footer</h1>
<?php
for ($i=1; $i<=$footer_total; $i++){
    echo "<h4 class='text-center'>Footer type ".$i."</h4>";
    include "footer/footer".$i.".html";
}
?>

<h1 class="text-center">Empty</h1>
<?php
for ($i=1; $i<=$empty_total; $i++){
    echo "<h4 class='text-center'>Empty type ".$i."</h4>";
    include "empty/empty".$i.".html";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
