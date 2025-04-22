<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Camilan Pedas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        h1 {
            color: #d32f2f;
            text-align: center;
            margin-bottom: 30px;
            font-size: 36px;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-size: 20px;
            color: #d32f2f;
        }
        .card-subtitle {
            font-size: 14px;
            color: #757575;
        }
        .price {
            font-weight: bold;
            font-size: 18px;
            color: #d32f2f;
        }
        .btn-custom {
            background-color: #d32f2f;
            color: white;
            border-radius: 25px;
            padding: 8px 20px;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #c2185b;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .badge {
            font-size: 14px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center text-danger mb-4">Daftar Camilan Pedas</h1>

        <div class="row">
            @forelse ($snacks as $snack)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 border-danger">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title text-danger">{{ $snack->name }}</h5>
                                
                                @if(!empty($snack->level))
                                    <span class="badge bg-danger mb-2">Level {{ $snack->level }}</span>
                                @endif

                                <p class="card-text text-secondary">{{ $snack->description }}</p>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-bold text-danger">Rp{{ number_format($snack->price) }}</span>
                                <button class="btn btn-sm btn-outline-danger">Tambah ke Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        Tidak ada camilan pedas yang tersedia.
                    </div>
                </div>
            @endforelse
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger w-25">Logout</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
