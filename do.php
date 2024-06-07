<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Carousel</title>
    <link rel="stylesheet" href="./image.css">
</head>
<body>
<div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img1.jfif" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="img2.jfif" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="img3.jpg" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-control next" onclick="nextSlide()">&#10095;</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
