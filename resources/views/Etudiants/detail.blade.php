<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>detail</title>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
        }

        .info-group {
            padding: 1rem;
            border-radius: 0.5rem;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }

        .info-group:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-gradient-primary text-white py-4">
                <h3 class="mb-0 text-center fw-bold">{{ $student->name }}'s Profile</h3>
            </div>

            <div class="card-body p-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-group">
                            <i class="bi bi-envelope-fill text-primary me-2"></i>
                            <span class="fw-bold">Email:</span>
                            <p class="ms-4 text-muted">{{ $student->email }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-group">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>
                            <span class="fw-bold">Phone:</span>
                            <p class="ms-4 text-muted">{{ $student->phone }}</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="info-group">
                            <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                            <span class="fw-bold">Address:</span>
                            <p class="ms-4 text-muted">{{ $student->address }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-group">
                            <i class="bi bi-book-fill text-primary me-2"></i>
                            <span class="fw-bold">Filiere:</span>
                            <p class="ms-4 text-muted">{{ $student->filiere }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-group">
                            <i class="bi bi-calendar-fill text-primary me-2"></i>
                            <span class="fw-bold">Inscription Date:</span>
                            <p class="ms-4 text-muted">{{ $student->date_inscription }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-light p-4 text-center">
                <a href="{{ route('etudiants.edit', $student->id) }}" class="btn btn-warning px-4 me-2">
                    <i class="bi bi-pencil-fill me-2"></i>Edit
                </a>
                <a href="{{ route('etudiants.etudiants') }}" class="btn btn-secondary px-4">
                    <i class="bi bi-arrow-left me-2"></i>Back
                </a>
            </div>
        </div>
    </div>


</body>

</html>
