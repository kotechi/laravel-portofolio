<x-header-admin />
<body>
  <div class="container-scroller">
    <!-- Sidebar -->
    <x-sidebar-admin/>
    
    <div class="container-fluid page-body-wrapper">
      <!-- Navbar -->
      <x-navbar-admin/>
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{ route('admin.certificate.create') }}" class="btn btn-primary">Create Data</a>
                  </h4>

                  <!-- Table -->
                  <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>name</th>
                          <th>issued_by</th>
                          <th>issued_at</th>
                          <th>file</th>
                          <th>images</th>
                          <th>date</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($certifications as $item)
                        <tr>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->issued_by }}</td>
                          <td>{{ $item->issued_at }}</td>
                          <td>
                            @if (!$item->file)
                              <p>file not found</p>
                            @else 
                            <a  class="btn btn-primary" href="{{ asset('storage/' . $item->file) }}" target="_blank">
                              Lihat Sertifikat
                            </a>
                            @endif  
                          <td>
                            @if (!$item->image)
                              <p>file not found</p>
                            @else 
                            <a  class="btn btn-primary" href="{{ asset('storage/' . $item->image) }}" target="_blank">
                              Lihat Image
                            </a>
                          </td>
                            @endif
                          </td>
                          <td>{{ $item->date }}</td>
                          <td>
                            <a href="{{ route('admin.certificate.showdtl', $item) }}" class="btn btn-primary">
                              <i class="fas fa-edit"></i> show detail
                            </a>
                            <a href="{{ route('admin.certificate.edit', $item) }}" class="btn btn-warning">
                              <i class="fas fa-edit"></i> Edit
                          </a>
                            <form action="{{ route('admin.certificate.destroy', $item->id) }}" method="POST" class="d-inline" id="delete-form-{{ $item->id }}">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $item->name }}', {{ $item->id }})">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    
      </div>
    </div>
  </div>

  <x-footer-admin/>
</body>
