<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Tailwind CSS or Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- Style --}}
</head>
<style>
    body {
        background-color: #f3f4f6;
    }

    .login-container {
        background-color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .login-form {
        max-width: 400px;
        padding: 2rem;
    }
</style>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="flex w-full max-w-4xl shadow-lg">
        <!-- Left side with image -->
        <div class="hidden md:block w-1/2 bg-green-100 relative">
            <!-- Add background image or vector -->
            <img src="{{ asset('assets\images\pexels-ivan-samkov-8951601.jpg') }}" alt="Login Image"
                class="w-full h-full object-cover">
        </div>

        <!-- Right side with login form -->
        <div class="w-full md:w-1/2 bg-white p-8">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-center text-green-600">Welcome back</h2>
            </div>
            <!-- Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-600">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Enter your email">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm text-gray-600">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Enter your password">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="text-green-500 form-checkbox">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm text-green-500 hover:underline">Forgot
                        password?</a>
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600">Log
                        In</button>
                </div>

                <!-- Sign Up -->
                <div class="text-center text-sm">
                    <p class="text-gray-600">New to our platform? <a href="{{ route('register') }}"
                            class="text-green-500 hover:underline">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
