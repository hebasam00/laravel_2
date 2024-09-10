<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Bags</title>
    <link rel="stylesheet" href="trendybags.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            padding: 15px;
        }

        .card img {
            width: 100%;
            height: auto; 
            border-radius: 8px;
        }

        .card h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .card p {
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Trendy Bags</h1>
        <div class="card-container">
            <div class="card">
                <img src="images/th (1).jpg" alt="Stylish Red Handbag">
                <h2>Stylish Red Handbag</h2>
                <p>A vibrant red handbag that adds a pop of color to any outfit. Features a sleek design with high-quality material.</p>
            </div>
            <div class="card">
                <img src="images/th (2).jpg" alt="Elegant Black Tote Bag">
                <h2>Elegant Black Tote Bag</h2>
                <p>An elegant black tote bag perfect for both casual and formal settings. Spacious and stylish with premium finishes.</p>
            </div>
        </div>
    </div>
</body>
</html>
