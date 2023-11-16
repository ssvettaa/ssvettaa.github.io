<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>2015Document</title>

    <script>
        function sizeButton(size)
        {
            
            for (i= 1; i < 7; i++)
            {
                document.images[i].style = `width: ${size}px; height: ${size}px`;
            }
        } 
    </script>
</head>
<body>
    <?php
    include('header.html');
    ?>
    <main class="padding-text wrapper" >
        <div class="wrapper">
            <h1>Фото</h1> <br>
            <img  src="images/1.jpg" alt="ромашки" width="450" class="images" >
            <br><h3> ромашки </h3><br>
            <img  src="images/2.jpg" alt="Москва" width="450" class="images">
            <br><h3> Москва </h3><br>
            <img  src="images/3.jpg" alt="ежики" width="450" class="images" >
            <br><h3> ежики </h3><br>
            <img  src="images/4.jpg" alt="енот" width="450" class="images">
            <br><h3> енотик </h3><br>
            <img  src="images/5.jpg" alt="белые тигры" width="450" class="images">
            <br><h3> белые тигры </h3><br>
            <img  src="images/6.jpeg" alt="котенок" width="450" class="images">
            <br><h3> котик </h3><br>
        </div>
        <div class="sizeButton">
            <button onclick="sizeButton(150)" class="styleButton">изменить на 150px</button><br>
            <button onclick="sizeButton(300)" class="styleButton">изменить на 300px</button><br>
            <button onclick="sizeButton(600)" class="styleButton">изменить на 600px</button><br>
            
        </div>
    </main>
    <?php include('footer.html'); ?>
</body>
</html>