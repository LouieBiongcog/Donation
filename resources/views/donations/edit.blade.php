<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            animation: fadeInUp 1s ease-out;
        }

        h1 {
            font-weight: 700;
            color: #007bff;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 30px;
            font-weight: bold;
            padding: 10px 20px;
            text-transform: uppercase;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0px 5px 15px rgba(0, 123, 255, 0.2);
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        .transform-hover {
            position: relative;
            overflow: hidden;
            background-color: #007bff;
            color: white;
            transition: all 0.4s ease;
            border-radius: 5px;
        }

        .transform-hover::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
        }

        .transform-hover:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }

        .transform-hover:hover {
            transform: translateY(-5px);
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

    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-primary mb-4 text-center">Edit Donation</h1>
        
        <form action="{{ route('donations.update', $donation->id) }}" method="POST">
            @csrf
            @method('PUT')

         
            <div class="mb-3">
                <label for="donor_name" class="form-label">Donor Name</label>
                <input type="text" class="form-control" id="donor_name" name="donor_name" value="{{ old('donor_name', $donation->donor_name) }}" required>
            </div>

         
            <div class="mb-3">
                <label for="amount" class="form-label">Amount (₱)</label>
                <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount', $donation->amount) }}" required>
            </div>

          
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message">{{ old('message', $donation->message) }}</textarea>
            </div>

           
            <button type="submit" class="btn btn-primary transform-hover">Update Donation</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
