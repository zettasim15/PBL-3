<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<<<<<<< HEAD
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #BCDDC3;
            font-family: 'inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            max-width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-custom {
            background-color: #3A3A3A;
            color: white;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #5a5a5a;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        /* Tambahkan CSS ini */
        .form-control, .form-select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            box-sizing: border-box;
        }


        .link-signup {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .link-signup a {
            color: #007BFF;
            text-decoration: none;
        }

        .link-signup a:hover {
            text-decoration: underline;
        }
        

    </style>
</head>
<body>

<div class="login-container">
    <h2>WELCOME <br> To Our Web</h2>
    <p class="text-center">Login To Your Account</p>
    <form method="post">
    <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Enter your username" required>
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required>
</div>

        <div class="form-group">
            <label for="role">Select a role:</label>
            <select name="role" id="role" class="form-control form-control-lg" required>
                <option value="Member">Member</option>
                <option value="Manager">Manager</option>
            </select>
        </div>
        <button type="submit" class="btn btn-custom btn-lg">LOGIN</button>
    </form>
    <div class="link-signup">
        <p>Not have an account? <a href="register.php">Sign up Here!</a></p>
    </div>
</div>

<script src="js/app.js"></script>

=======
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-indigo-200 to-blue-300 flex justify-center items-center min-h-screen">

<div class="card w-96 bg-white shadow-xl border border-gray-200">
    <div class="card-body">
        <h2 class="text-center text-2xl font-bold text-primary">Welcome To Our Web</h2>
        <p class="text-center mb-4 text-gray-600">Login To Your Account</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-control">
                <label for="username" class="label">
                    <span class="label-text text-gray-700">Username</span>
                </label>
                <input type="text" id="username" name="username" class="input input-bordered" placeholder="Enter your username" required value="{{ old('username') }}">
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-control mt-4">
                <label for="password" class="label">
                    <span class="label-text text-gray-700">Password</span>
                </label>
                <input type="password" id="password" name="password" class="input input-bordered" placeholder="Enter your password" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-control mt-4">
                <label for="role" class="label">
                    <span class="label-text text-gray-700">Select a role</span>
                </label>
                <select name="role" id="role" class="select select-bordered w-full">
                    <option value="Member" {{ old('role') == 'Member' ? 'selected' : '' }}>Member</option>
                    <option value="Manager" {{ old('role') == 'Manager' ? 'selected' : '' }}>Manager</option>
                </select>
            </div>

            <div class="form-control mt-6">
                <button type="submit" class="btn btn-primary w-full">LOGIN</button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-600">Don't have an account? 
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign up here</a>
            </p>
        </div>
    </div>
</div>

>>>>>>> 988c863edccd24a0e657a164140a2d85611a6e3e
</body>
</html>
