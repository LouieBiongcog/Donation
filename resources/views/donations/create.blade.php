<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-out;
        }

        .form-container h1 {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            color: #007bff;
        }

        .form-container .form-label {
            font-weight: 500;
        }

        .form-control {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            transform: scale(1.02);
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }

        .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.4);
        }

      
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

        .transform-hover {
            transition: transform 0.3s ease;
        }

        .transform-hover:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="form-container">
                    <h1 class="text-center mb-4">Create New Donation</h1>

                   
                    <form action="{{ route('donations.store') }}" method="POST">
                        @csrf

                       
                        <div class="mb-4">
                            <label for="donor_name" class="form-label">Donor Name</label>
                            <input type="text" name="donor_name" id="donor_name" required
                                   class="form-control" placeholder="Enter donor's name">
                        </div>

                       
                        <div class="mb-4">
                            <label for="amount" class="form-label">Donation Amount (₱)</label>
                            <input type="number" name="amount" id="amount" step="0.01" required
                                   class="form-control" placeholder="Enter donation amount">
                        </div>

                     
                        <div class="mb-4">
                            <label for="message" class="form-label">Message (Optional)</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Leave a message..."></textarea>
                        </div>

                       
                        <button type="submit" class="btn btn-primary w-100 transform-hover">
                            Submit Donation
                        </button>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('donations.index') }}" class="btn btn-secondary transform-hover">Cancel</a>
                            <button type="reset" class="btn btn-warning transform-hover">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
