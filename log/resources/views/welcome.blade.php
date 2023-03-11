<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Load Tailwind CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-2xl font-bold mb-4">Login</h1>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="border rounded-lg py-2 px-3 w-full" id="email" type="email" name="email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="border rounded-lg py-2 px-3 w-full" id="password" type="password" name="password" required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-indigo-600" name="remember">
                        <span class="ml-2 text-gray-700">Remember me</span>
                    </label>
                    <a class="inline-block align-baseline font-bold text-sm text-indigo-600 hover:text-indigo-900" href="#">
                        Forgot Password?
                    </a>
                </div>
                <div>
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
