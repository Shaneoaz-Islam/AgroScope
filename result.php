
<?php
if (!isset($_COOKIE['uploaded_image'])) {
    echo "No image found.";
    exit();
}
$imagePath = $_COOKIE['uploaded_image'];

if (!file_exists($imagePath)) {
    echo "Image file not found." . htmlspecialchars($imagePath);
    exit();
}

include("api.php");
$result = call_openai_vision_api($imagePath);
?>
<!DOCTYPE html>
<html>
<head><title>Detection Result</title></head>
<body>
    <h2>Detection Result</h2>
    <img src="<?php echo $imagePath; ?>" width="300"><br><br>
    <strong>Analysis:</strong>
    <p><?php echo nl2br(htmlspecialchars($result)); ?></p>
</body>
</html>
