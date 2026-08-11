<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <div style="max-width: 640px; margin: 4rem auto; padding: 2rem; font-family: Arial, sans-serif;">
        <h1>Forgot Password</h1>
        <p>Send a reset link to your email address.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required>
            </div>
            <button type="submit">Send Reset Link</button>
        </form>
    </div>
</body>
</html>
