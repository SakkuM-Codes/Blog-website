<?php

include('connection.php');

if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
    
    $query = "SELECT * FROM blogs WHERE slug = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $slug);  // 's' is for string
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();
    
    if (!$blog) {
        echo "Blog post not found.";
        exit;
    }
} else {
    echo "No slug provided.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $editor = $_POST['editor'];
    $images = $_FILES['images']['name'];
    $imageTmp = $_FILES['images']['tmp_name'];
    $imagePath = "uploads/" . $images;
    
    if ($image) {
        move_uploaded_file($imageTmp, $path);
    } else {
        $images = $blog['images']; 
    }
    
    $updateQuery = "UPDATE blogs SET title = ?, editor = ?, images = ? WHERE slug = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param('ssss', $title, $editor, $images, $slug); 
    $updateStmt->execute();
    echo "Blog post updated successfully.";
    // Redirect to the detail page
    header("Location: create-card.php?slug=" . $slug);
    exit;
}
?>
<!-- Edit Form -->
<div class="container">
    <h2>Edit Blog Post</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?= htmlspecialchars($blog['title']); ?>" required>
        </div>
        <div>
            <label for="editor">Content:</label>
            <textarea name="editor" id="editor" rows="4" required><?= htmlspecialchars($blog['editor']); ?></textarea>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            <p>Current image: <?= $blog['images'] ? "<img src='" . $blog['images'] . "' width='100'>" : "No image"; ?></p>
        </div>
        <button type="submit">Update Post</button>
    </form>
</div>

