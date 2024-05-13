<?php 
include("templates/header.php");

if(isset($_SESSION["create"])){
?>
<div class="alert alert-success">
    <?php
    echo $_SESSION["create"];
    ?>
</div>
<?php
unset($_SESSION["create"]);
}
?>

<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
    <form action="process.php" method="post">
        <div class="form-field mb-4">
            <input type="text" class="form-control" name="title" placeholder="Enter Title:">
        </div>
        <div class="form-field mb-4">
            <textarea name="summary" class="form-control" cols="30" rows="10" placeholder="Enter Job Summary:"></textarea>
        </div>
        <div class="form-field mb-4">
            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Enter Details:"></textarea>
        </div>
        <div class="form-field mb-4">
            <input type="text" class="form-control" name="link" placeholder="Enter Link:">
        </div>
        <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">

        <div class="form-field">
            <input type="submit" class="btn btn-primary" value="Submit" name="create">
        </div>
    </form>
</div>

<?php 
include("templates/footer.php");
?>
