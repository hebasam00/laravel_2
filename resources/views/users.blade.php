<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

input[type="text"],
input[type="email"] {
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
    <section id="users">
        <h3>Manage Users</h3>
        <button onclick="showForm('user')">Add User</button>
        <div id="user-form" class="form hidden">
            <h4>New User</h4>
            <input type="text" id="user-name" placeholder="User Name">
            <input type="email" id="user-email" placeholder="Email Address">
            <button onclick="addUser()">Add</button>
            <button onclick="editUser()">edit</button>
            <button onclick="deleteUser()">delete</button>
            <button onclick="hideForm('user')">Close</button>
        </div>
        <table id="user-table">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="user-list">
                <!-- User rows will be inserted here -->
            </tbody>
        </table>
    </section>
    <script src="users.css"></script>
    
</body>
</html>





