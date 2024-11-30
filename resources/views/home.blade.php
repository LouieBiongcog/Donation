<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            animation: fadeInUp 1s ease-out;
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
        }

        .lead {
            font-size: 1.2rem;
            font-weight: 400;
        }

        .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
        }

        /* Animation for fading and sliding up */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hover effect for buttons */
        .transform-hover {
            transition: transform 0.3s ease;
        }

        .transform-hover:hover {
            transform: translateY(-5px);
        }

        /* Custom spacing for buttons */
        .btn-lg {
            padding: 15px 30px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container text-center py-5">
        <h1 class="display-4 text-primary mb-4">Welcome to the Donation Platform</h1>
        <p class="lead text-secondary mb-5">Make donations and support causes you care about.</p>

        <!-- Button to View Donations -->
        <a href="{{ route('donations.index') }}" class="btn btn-outline-primary btn-lg me-3 shadow-sm transform-hover">
            View Donations
        </a>

        <!-- Button to Create a New Donation -->
        <a href="{{ route('donations.create') }}" class="btn btn-outline-success btn-lg shadow-sm transform-hover">
            Create a Donation
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
