
<?php
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $uploadDir = "uploads/";
    $imagePath = $uploadDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
        setcookie("uploaded_image", $imagePath, time() + 3600, "/");
        header("Location: result.php");
        exit();
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "No image uploaded.";
}
?>
