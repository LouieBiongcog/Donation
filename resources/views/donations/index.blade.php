<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4f8;
            font-family: 'Arial', sans-serif;
        }

        .container {
            animation: fadeInUp 1s ease-out;
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            color: #007bff;
        }

        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .table-hover tbody tr:hover {
            background-color: #f0f8ff;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
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

        .btn-outline-primary {
            border: 2px solid #007bff;
            color: #007bff;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .btn-outline-success {
            border: 2px solid #28a745;
            color: #28a745;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
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

        .table th, .table td {
            vertical-align: middle;
            font-size: 1.1rem;
        }

        .text-muted {
            font-size: 1.1rem;
            font-weight: 500;
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

    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="display-5 text-center mb-4">All Donations</h1>

  
        <div class="d-flex justify-content-center mb-4">
            <a href="{{ route('donations.create') }}" class="btn btn-outline-success mb-3 shadow-sm transform-hover">
                Create a Donation
            </a>
        </div>

      
        @if($donations->isNotEmpty())
        <table class="table table-striped table-hover table-bordered shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Donor Name</th>
                    <th>Amount (₱)</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->donor_name }}</td>
                    <td>{{ $donation->amount }}</td>
                    <td>{{ $donation->message ?? 'No message' }}</td>
                    <td>
                        <a href="{{ route('donations.edit', $donation->id) }}" class="btn btn-outline-primary btn-sm me-1 shadow-sm transform-hover">Edit</a>
                        <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm shadow-sm transform-hover" onclick="return confirm('Are you sure you want to delete this donation?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-muted text-center">No donations available. <a href="{{ route('donations.create') }}" class="text-primary">Create one</a> now!</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
