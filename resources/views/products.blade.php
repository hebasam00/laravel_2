<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
/* dash.css */

/* Reset some default styles */
body, h1, h2, h3, h4, p {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    height: 100vh;
    margin: 0;
}

.sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.1);
}

.sidebar h2 {
    margin-bottom: 20px;
    font-size: 1.5em;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 10px 0;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.1em;
}

.main-content {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
}

h3 {
    margin-bottom: 15px;
    font-size: 1.3em;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.form {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.hidden {
    display: none;
}

input[type="text"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1em;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
    font-weight: bold;
}

td button {
    background-color: #dc3545;
    border: none;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.9em;
    margin-right: 5px;
    transition: opacity 0.3s ease;
}

td button.edit {
    background-color: #007bff;
}

td button:hover {
    opacity: 0.8;
}




    </style>
</head>
<body>
    <section id="products">
        <h3>Manage Products</h3>
        <button onclick="showForm('product')">Add Product</button>
        <div id="product-form" class="form hidden">
            <h4>New Product</h4>
            <input type="text" id="product-name" placeholder="Product Name">
            <input type="text" id="product-category" placeholder="Product Category">
            <button onclick="addProduct()">Add</button>
            <button onclick="editProduct()">edit</button>
            <button onclick="deleteProduct()">delete</button>
            <button onclick="hideForm('product')">Close</button>
        </div>
        <table id="product-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="product-list">
                <!-- Product rows will be inserted here -->
            </tbody>
        </table>
    </section>
    <script src="products.css"></script>
    
    
</body>
</html>







