<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <div style="max-width: 640px; margin: 4rem auto; padding: 2rem; font-family: Arial, sans-serif;">
        <h1>Email Verification</h1>
        <p>Please verify your email address to continue.</p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit">Resend verification link</button>
        </form>
    </div>
</body>
</html>
