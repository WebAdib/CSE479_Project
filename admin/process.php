<?php
if (isset($_POST["create"])) {
    include("../php/connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $link = mysqli_real_escape_string($conn, $_POST["link"]);
    $sqlInsert = "INSERT INTO posts(date, title, summary, content, link) VALUES ('$date', '$title', '$summary', '$content', '$link')";
    if(mysqli_query($conn, $sqlInsert)){
        session_start();
        $_SESSION["create"] = "Job added successfully";
        header("Location:index.php");
    }else{
        die("Data is not inserted!");
    }
}
?>

<?php
if (isset($_POST["update"])) {
    include("../php/connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $link = mysqli_real_escape_string($conn, $_POST["link"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE posts SET title = '$title', summary = '$summary', content = '$content', date = '$date', link = '$link' WHERE id = $id";
    if(mysqli_query($conn, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Post udpated successfully";
        header("Location:index.php");
    }else{
        die("Data is not updated!");
    }
}
?>
