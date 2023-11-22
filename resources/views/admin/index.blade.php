<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom styles here -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .user-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
        }

        .user-card {
            border: 1px solid #dee2e6;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 3px;
        }

        .user-name {
            font-size: 1.2rem;
            color: #007bff;
        }

        .user-email {
            color: #6c757d;
        }

        .user-password,
        .user-userType,
        .user-created_at {
            /* Add styles for these fields as needed */
        }

        .no-users {
            font-size: 1rem;
            color: #dc3545;
            margin-top: 15px;
        }
    </style>
</head>
@extends('admin.adminhome')
@section('content')
    <body>
    <div class="user-container">
        <h1 class="text-center mb-3">Users</h1>

        @if (!empty($users))
            @foreach ($users as $user)
                <div class="user-card">
                    <h3 class="user-name">{{ $user->name }}</h3>
                    <p class="user-email">{{ $user->email }}</p>
                    <p class="user-password">{{ $user->password }}</p>
                    <p class="user-userType">{{ $user->usertype }}</p>
                    <p class="user-created_at">{{ $user->created_at }}</p>
                    <!-- Add more fields as needed -->
                </div>
            @endforeach
        @else
            <p class="no-users">No Users Found</p>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
</html>
