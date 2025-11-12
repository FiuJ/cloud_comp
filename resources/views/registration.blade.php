<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloud Computing</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f9fb; margin: 0; padding: 0;">

    <table role="presentation" style="width: 100%; border-spacing: 0; padding: 40px 0;">
        <tr>
            <td align="center">
                <table role="presentation" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05); padding: 40px;">
                    
                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding-bottom: 20px;">
                            <h1 style="color: #333333; font-size: 28px; margin: 0;">
                                Cloud Computing 2025 - OK
                            </h1>
                            <p style="color: #777777; font-size: 14px; margin: 4px 0 0;">
                                Registration Confirmation
                            </p>
                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td>
                            <p style="font-size: 16px; color: #333;">
                                Hello <strong>{{ $name }}</strong>!
                            </p>
                            <p style="font-size: 15px; color: #555;">
                                Congratulations! You have successfully registered for <strong>Cloud Computing 2025</strong>.
                                We’re excited to have you join our program!
                            </p>
                        </td>
                    </tr>

                    <!-- Registration Details -->
                    <tr>
                        <td style="background-color: #e9ffe4; border: 1px solid #cdffc1; border-radius: 8px; padding: 20px; margin-top: 20px;">
                            <h3 style="margin-top: 0; color: #333;">
                                Registration Details
                            </h3>
                            <p style="font-size: 14px; margin: 6px 0;"><strong>Full Name:</strong> {{ $name }}</p>
                            <p style="font-size: 14px; margin: 6px 0;"><strong>Email:</strong> <a href="mailto:{{ $email }}" style="color: #2a7ae2; text-decoration: none;">{{ $email }}</a></p>
                            <p style="font-size: 14px; margin: 6px 0;"><strong>Birthdate:</strong> {{ $date_of_birth }}</p>
                            <p style="font-size: 14px; margin: 6px 0;"><strong>Course:</strong> Cloud Computing 2025</p>
                        </td>
                    </tr>

                    <!-- Confirmation Button -->
                    <tr>
                        <td align="center" style="padding-top: 30px;">
                            <a href="jevon.khufra.my.id" style="background-color: #36b37e; color: #ffffff; padding: 12px 25px; text-decoration: none; border-radius: 6px; font-weight: bold; display: inline-block;">
                                
                                Confirm My Registration
                            </a>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding-top: 25px;">
                            <p style="font-size: 13px; color: #666;">
                                <strong>Important:</strong> Please confirm your registration within 7 days to secure your spot in the program.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>