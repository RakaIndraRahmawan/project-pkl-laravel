<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
</head>
<body>
    <div style="max-width: 640px; margin: 4rem auto; padding: 2rem; font-family: Arial, sans-serif;">
        <h1>Confirm Password</h1>
        <p>Please confirm your password.</p>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>
            <button type="submit">Confirm</button>
        </form>
    </div>
</body>
</html>
