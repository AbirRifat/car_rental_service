<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset OTP</title>
</head>
<body>
    <h2>Password Reset OTP</h2>
    <p>Dear {{$user}},</p>
    <p>We received a request to reset your password. Please use the following OTP to verify your identity:</p>
    <h3>{{ $otp }}</h3>
    <p>This OTP is valid for 2 minutes.</p>
    <p>If you did not request a password reset, please ignore this email.</p>
</body>
</html>
