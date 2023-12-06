@extends('admin.adminhome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add your custom styles here -->
    <style>
        body {
            background-color: rgb(10, 33, 48);
        }

        .user-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 10px;
            background-color: #3a3636;
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

        .user-name,
        .user-email,
        /* .user-password, */
        .user-userType,
        .user-created_at
         {
            font-size: 1.2rem;
            color: #868c92;
        }

        .no-users {
            font-size: 1rem;
            color: #dc3545;
            margin-top: 15px;
        }
    </style>
</head>

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
</body>
</html>
@endsection