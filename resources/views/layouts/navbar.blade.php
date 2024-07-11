<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Koperasi</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #328de9;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 1.1rem;
        }
        .sidebar a:hover {
            background-color: #02f0f9;
        }
        .sidebar .nav-link.active {
            background-color: #007bff;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2 class="text-white">Koperasi</h2>
        <a href="/"><i class="fas fa-home"></i> Beranda</a>
        <a href="{{ route('customer.index') }}" class="nav-link"><i class="fas fa-users"></i> Nasabah</a>
        <a href="{{ route('mandatory-saving.index') }}" class="nav-link"><i class="fas fa-piggy-bank"></i> Simpanan Wajib</a>
         @csrf
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
