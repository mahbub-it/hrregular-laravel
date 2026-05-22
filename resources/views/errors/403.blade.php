<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Unauthorized</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f3f4f6;
            color: #1f2937;
            margin: 0;
        }

        .container {
            text-align: center;
            background: white;
            padding: 2.5rem 4rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        h1 {
            font-size: 3rem;
            margin-top: 0;
            margin-bottom: 1rem;
            color: #ef4444;
        }

        p {
            font-size: 1.25rem;
            font-weight: 500;
        }

        a {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.5rem 1rem;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: 0.2s;
        }

        a:hover {
            background: #2563eb;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>403</h1>
        <!-- We explicitly force printing the exception message here! -->
        <p>{{ $exception->getMessage() ?: 'You are not authorized to view this page.' }}</p>
        <a href="{{ url()->previous() !== url()->current() ? url()->previous() : url('/') }}">Go Back</a>
    </div>
</body>

</html>