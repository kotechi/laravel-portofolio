<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form contacts</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            background: linear-gradient(135deg, #2c2c2c 0%, #1a1a1a 100%);
        }
        .form-control:focus {
            border-color: #333;
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.25);
        }
        .floating-input {
            transition: all 0.2s ease;
            background-color: #f8f8f8;
        }
        .floating-input:focus {
            transform: translateY(-2px);
            background-color: #fff;
        }
        .icon-container {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #333;
        }
        .input-group {
            position: relative;
        }
        .progress-bar {
            transition: width 0.5s ease-in-out;
            background-color: #333;
        }
        .card {
            border: none;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background: linear-gradient(135deg, #333 0%, #000 100%);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #000 0%, #333 100%);
        }
        .form-control {
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #000;
        }
        .text-primary {
            color: #000 !important;
        }
        .border-bottom {
            border-color: #000 !important;
        }
    </style>
</head>
<body class="gradient-custom min-vh-100 d-flex align-items-center">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary mb-2">Form contacts</h2>
                            <p class="text-muted">Silakan lengkapi data contacts</p>
                        </div>

                        <div class="progress mb-4" style="height: 3px; background-color: #eee;">
                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                        </div>

                        <form action="{{ route('admin.contacts.store')}}" method="POST" id="aboutForm">
                            @csrf
                            <div class="mb-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg floating-input ps-3" 
                                           name="name" placeholder="Name" required>
                                    <div class="icon-container">
                                        <i class="fas fa-heading"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg floating-input ps-3" 
                                           name="address" placeholder="Address" required>
                                    <div class="icon-container">
                                        <i class="fas fa-align-left"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-4">
                                <div class="input-group">
                                    <input type="gmail" class="form-control form-control-lg floating-input ps-3" 
                                           name="gmail" placeholder="Gmail" required>
                                    <div class="icon-container">
                                        <i class="fas fa-align-left"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="input-group">
                                    <input type="link" class="form-control form-control-lg floating-input ps-3" 
                                           name="whatsapp" placeholder="whatsapp" required>
                                    <div class="icon-container">
                                        <i class="fas fa-align-left"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn btn-custom btn-lg text-white">
                                    Simpan Data
                                    <i class="fas fa-save ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('aboutForm').addEventListener('input', function() {
            const inputs = this.querySelectorAll('input[required]');
            let filledInputs = 0;
            
            inputs.forEach(input => {
                if (input.value.trim() !== '') {
                    filledInputs++;
                }
            });
            
            const progress = (filledInputs / inputs.length) * 100;
            document.querySelector('.progress-bar').style.width = progress + '%';
        });

        const inputs = document.querySelectorAll('.floating-input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('.icon-container').style.color = '#000';
            });
            
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('.icon-container').style.color = '#333';
            });
        });
    </script>
</body>
</html>
