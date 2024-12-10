<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form certifications</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
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
                            <h2 class="fw-bold text-primary mb-2">Form certifications</h2>
                            <p class="text-muted">Silakan lengkapi data certifications</p>
                        </div>

                        <div class="progress mb-4" style="height: 3px; background-color: #eee;">
                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                        </div>

                        <form action="{{ route('admin.certificate.update', $certification) }}" 
                            method="POST" 
                            enctype="multipart/form-data" 
                            id="certificationsForm">
                          @csrf
                          @method('PUT')
                          
                          <div class="mb-4">
                              <label for="name" class="form-label">Name</label>
                              <div class="input-group">
                                  <input type="text" 
                                         id="name"
                                         class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                         name="name" 
                                         value="{{ old('name', $certification->name) }}" 
                                         required>
                                  <div class="icon-container">
                                      <i class="fas fa-heading"></i>
                                  </div>
                                  @error('name')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                        
                          <div class="mb-4">
                              <label for="issued_by" class="form-label">Issued By</label>
                              <div class="input-group">
                                  <input type="text" 
                                         id="issued_by"
                                         class="form-control form-control-lg @error('issued_by') is-invalid @enderror" 
                                         name="issued_by" 
                                         value="{{ old('issued_by', $certification->issued_by) }}" 
                                         required>
                                  <div class="icon-container">
                                      <i class="fas fa-building"></i>
                                  </div>
                                  @error('issued_by')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                        
                          <div class="mb-4">
                              <label for="issued_at" class="form-label">Issue Date</label>
                              <div class="input-group">
                                  <input type="date" 
                                         id="issued_at"
                                         class="form-control form-control-lg @error('issued_at') is-invalid @enderror" 
                                         name="issued_at" 
                                         value="{{ old('issued_at', $certification->issued_at) }}" 
                                         required>
                                  <div class="icon-container">
                                      <i class="fas fa-calendar"></i>
                                  </div>
                                  @error('issued_at')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                      
                          <div class="mb-4">
                              <label for="description" class="form-label">Description</label>
                              <div class="input-group">
                                  <textarea id="description"
                                            class="form-control form-control-lg @error('description') is-invalid @enderror" 
                                            name="description" 
                                            rows="3" 
                                            required>{{ old('description', $certification->description) }}</textarea>
                                  <div class="icon-container">
                                      <i class="fas fa-align-left"></i>
                                  </div>
                                  @error('description')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                      
                        <div class="mb-4">
                            <label for="image" class="form-label">Certificate File (image Only)</label>
                            <div class="input-group">
                                <input type="file" 
                                       id="image"
                                       class="form-control form-control-lg " 
                                       name="image">
                                <div class="icon-container">
                                    <i class="fas fa-file-jpg"></i>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @if($certification->image)
                                <div class="mt-2">
                                    <small class="text-muted">Current file: {{ basename($certification->image) }}</small>
                                </div>
                            @endif
                            <div class="mt-1">
                                <small class="text-muted">* Maximum file size: 2MB, Image format only</small>
                            </div>
                        </div>
                      
                        <div class="mb-4">
                            <label for="file" class="form-label">Certificate File (file Only)</label>
                            <div class="input-group">
                                <input type="file" 
                                        id="file"
                                        class="form-control form-control-lg " 
                                        name="file" 
                                        accept="application/pdf">
                                <div class="icon-container">
                                    <i class="fas fa-file-jpg"></i>
                                </div>
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @if($certification->file)
                                <div class="mt-2">
                                    <small class="text-muted">Current file: {{ basename($certification->file) }}</small>
                                </div>
                            @endif
                        </div>
                          <div class="mb-4">
                              <label for="date" class="form-label">Date</label>
                              <div class="input-group">
                                  <input type="date" 
                                         id="date"
                                         class="form-control form-control-lg @error('date') is-invalid @enderror" 
                                         name="date" 
                                         value="{{ old('date', $certification->date) }}" 
                                         required>
                                  @error('date')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                        
                            <div class="d-grid gap-2 mt-5">
                            <button type="button" id="updateButton" class="btn btn-custom btn-lg text-white">
                                Update Certificate
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        document.getElementById('file').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        // Validasi tipe file
        if (file.type !== 'application/pdf') {
            Swal.fire({
                icon: 'error',
                title: 'Invalid File Type',
                text: 'Please upload PDF file only!',
                confirmButtonColor: '#3085d6'
            });
            this.value = ''; // Reset input file
            return;
        }
        
        // Validasi ukuran file (max 2MB)
        const maxSize = 2 * 1024 * 1024; // 2MB in bytes
        if (file.size > maxSize) {
            Swal.fire({
                icon: 'error',
                title: 'File Too Large',
                text: 'File size should not exceed 2MB!',
                confirmButtonColor: '#3085d6'
            });
            this.value = ''; // Reset input file
            return;
        }
    }
});
        document.getElementById('certificationsForm').addEventListener('input', function() {
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

        // SweetAlert confirmation for Update
        document.getElementById('updateButton').addEventListener('click', function() {
            Swal.fire({
                title: 'apa anda yakin?',
                text: "lanjutkan?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ya, lanjutkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('certificationsForm').submit();
                }
            });
        });
    </script>
</body>
</html>
