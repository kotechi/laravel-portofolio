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
                    <a href="{{ route('admin.dashboard.create') }}" class="btn btn-primary">Create Data</a>
                  </h4>

                  <!-- Table -->
                  <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered table-sm ">
                      <thead>
                        <tr>
                          <th>judul</th>
                          <th>Deskripsi</th>
                          <th>Deskripsi 2</th>
                          <th>umur</th>
                          <th>tanggal_lahir</th>
                          <th>city</th>
                          <th>freelance</th>
                          <th>Language</th>
                          <th>EB</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($about as $item)
                        <tr>
                          <td>{{ $item->judul }}</td>
                          <td>{{ $item->deskripsi }}</td>
                          <td>{{ $item->deskripsi2 }}</td>
                          <td>{{ $item->umur }}</td>
                          <td>{{ $item->tanggal_lahir }}</td>
                          <td>{{ $item->city }}</td>
                          <td>{{ $item->freelance }}</td>
                          <td>{{ $item->language }}</td>
                          <td>{{ $item->educational_background }}</td>

                          <td>
                            <a href="{{ route('about.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('about.destroy', $item) }}" method="POST" class="d-inline" id="delete-form-{{ $item->id }}">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $item->judul }}', {{ $item->id }})">Delete</button>
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
