<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku Tamu</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #6db3f2, #1e69de);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
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
            background-color: #28a745;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Silahkan Isi Data Diri</h2>
        <form action="{{ url('/regprocess')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" required>
        </div>
        <div class="form-group">
            <label> Asal </label>
            <input name="asal" class="form-control" required>
        </div>
        <div class="form-group">
            <label> Tujuan </label>
            <input name="tujuan" class="form-control" required>
        </div>
        <div class="form-group">
            <label> Email </label>
            <input name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label> No Hp </label>
            <input type="number" name="no_hp" class="form-control" required >
            <input type="text" name="no_hp" class="form-control" maxlength="12" required pattern="\d{1,12}" >
            <div class="form-group"></div>
              
        </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</body>
</html>
