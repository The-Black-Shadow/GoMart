<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subcat'])) {
    // Process form data and perform insertion
    $categoryName = isset($_POST['category_name']) ? htmlspecialchars($_POST['category_name']) : '';
    $categoryImage = isset($_FILES['category_image']) ? $_FILES['category_image'] : '';

    if (empty($categoryName) || empty($categoryImage)) {
        echo "Please fill in all the required fields.";
    } else {
        // Upload directory on the server where the images will be saved
        $uploadDir = 'uploads/';

        // Create the upload directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Generate a unique filename for the uploaded image
        $imageName = uniqid() . '_' . $categoryImage['name'];

        // Move the uploaded image to the upload directory
        $targetPath = $uploadDir . $imageName;
        if (move_uploaded_file($categoryImage['tmp_name'], $targetPath)) {
            // Database connection parameters (replace with your actual database credentials)
            include 'connection.php';

            // Prepare the data for database insertion
            $escapedCategoryName = $conn->real_escape_string($categoryName);
            $escapedImagePath = $conn->real_escape_string($targetPath);

            // SQL query to insert the category and image path into the database
            $sql = "INSERT INTO categories (name, image) VALUES ('$escapedCategoryName', '$escapedImagePath')";

            if ($conn->query($sql) === true) {
                echo "Category added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the connection
            $conn->close();

            // Redirect to the same page to prevent form resubmission
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "Error uploading the image.";
        }
    }
}
?>