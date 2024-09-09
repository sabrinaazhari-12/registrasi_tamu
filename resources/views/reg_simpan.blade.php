<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku Tamu</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background: linear-gradient(45deg, #ffff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #0a0a0a;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }
        h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #1e69de;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #1558b0;
        }
        .alert-success {
            background-color: #659bf1;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Terima Kasih Telah Mengisi Data Pengunjung!!!!</h2>
        <form action="" method="post">
            @csrf
           
        </form>
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    </div>
    
</body>
</html>
