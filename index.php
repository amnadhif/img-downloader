<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Checker</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php
            // Path folder assets
            $dir = "assets/";

            // Memindai folder untuk file gambar
            $images = array_diff(scandir($dir), array('..', '.'));

            // Mengecek apakah ada gambar di folder
            if (!empty($images)) {
                // Loop melalui setiap gambar
                foreach ($images as $image) {
                    $imagePath = $dir . $image;
                    echo '<div class="col-md-4 mb-4">';
                    echo '  <div class="card">';
                    echo '      <img src="' . $imagePath . '" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">';
                    echo '      <div class="card-body">';
                    echo '          <h5 class="card-title">' . $image . '</h5>';
                    echo '          <a href="download.php?file=' . $image . '" class="btn btn-primary">Download</a>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-md-12">';
                echo '  <p class="text-center">Tidak ada gambar di folder assets.</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensinya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>