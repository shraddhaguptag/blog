<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <!-- Include Tailwind CSS from CDN for styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styling (if needed) */
        .auth-card {
            max-width: 500px;
            margin: 0 auto;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .logo {
            width: 5rem;
            height: 5rem;
        }
    </style>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="auth-card bg-white">
        <!-- Logo Section -->
        <div class="text-center mb-6">
            <a href="/">
                <img src="path-to-your-logo.png" alt="Application Logo" class="logo mx-auto">
            </a>
        </div>

        <!-- Email Verification Instructions -->
        <div class="mb-4 text-sm text-gray-600">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </div>

        <!-- Success Message for Resending Verification Link -->
        <div id="status-message" class="mb-4 font-medium text-sm text-green-600 hidden">
            A new verification link has been sent to the email address you provided during registration.
        </div>

        <!-- Forms for Resending Verification Email and Logging Out -->
        <div class="mt-4 flex items-center justify-between">
            <!-- Resend Verification Email Form -->
            <form id="resend-verification-form" method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                    Resend Verification Email
                </button>
            </form>

            <!-- Log Out Form -->
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Log Out
                </button>
            </form>
        </div>
    </div>

    <script>
        // Example script to handle status message visibility
        window.addEventListener('load', function() {
            var statusMessage = document.getElementById('status-message');
            var urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('status') === 'verification-link-sent') {
                statusMessage.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>
