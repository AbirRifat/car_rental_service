<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Rental Status is Approved</title>
</head>
<body>
    <p>Dear {{ $rental->user->name }},</p>

    <p>Congratulations! Your rental status has been reviewed and marked as approved. You can now log in to see your travel dates.</p>
    
    <p><strong>Rental Details:</strong></p>
    <p><strong>Car:</strong> {{ $rental->car->name }}</p>
    <p><strong>Total Cost:</strong> ${{ $rental->total_cost }}</p>
    <p><strong>Note:</strong> Please provide the total cost to our driver. Thank you for choosing us!</p>

    <p>Best regards,</p>
    <p>The Car Rental Team</p>
</body>
</html>
