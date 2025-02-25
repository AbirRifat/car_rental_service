<!DOCTYPE html>
<html>
<head>
    <title>Rental Canceled</title>
</head>
<body>
    <h2>Dear {{ $rental->user->name }},</h2>
    <p>We regret to inform you that your booking for the car <strong>{{ $rental->car->name }}</strong> has been canceled due to a shortage of the car or driver.</p>
    <p>We sincerely apologize for the inconvenience caused. If you need further assistance or would like to rebook, please contact us.</p>
    <p>Thank you for your understanding.</p>
    <p>Best regards,<br>Your Car Rental Team</p>
</body>
</html>
