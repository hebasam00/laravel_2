<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- تأكد من وجود ملفات CSS المناسبة -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            display: flex;
            flex-direction: column;
        }
        .form-container .form-group {
            margin-bottom: 15px;
        }
        .form-container .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container .form-group button:hover {
            background-color: #0056b3;
        }
        .toggle-links {
            text-align: center;
            margin-top: 20px;
        }
        .toggle-links a {
            color: #007bff;
            text-decoration: none;
        }
        .toggle-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- تسجيل الدخول -->
            <div class="login-form">
                <h2>Login</h2>
                @if ($errors->has('login'))
                    <div class="alert alert-danger">
                        {{ $errors->first('login') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" name="email" id="login-email" class="form-control" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" name="password" id="login-password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>

            <!-- تسجيل حساب جديد -->
            <div class="register-form" style="display: none;">
                <h2>Sign Up</h2>
                @if ($errors->has('register'))
                    <div class="alert alert-danger">
                        {{ $errors->first('register') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="register-name">Name</label>
                        <input type="text" name="name" id="register-name" class="form-control" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="register-email">Email</label>
                        <input type="email" name="email" id="register-email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" name="password" id="register-password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="toggle-links">
            <p>Already have an account? <a href="#" onclick="showLoginForm()">Login</a></p>
            <p>Don't have an account? <a href="#" onclick="showRegisterForm()">Sign Up</a></p>
        </div>
    </div>

    <script>
        function showLoginForm() {
            document.querySelector('.login-form').style.display = 'block';
            document.querySelector('.register-form').style.display = 'none';
        }

        function showRegisterForm() {
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.register-form').style.display = 'block';
        }

        // Show login form by default
        document.addEventListener('DOMContentLoaded', () => {
            showLoginForm();
        });
    </script>
</body>
</html>
