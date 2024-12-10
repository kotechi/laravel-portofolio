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
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create Data</a>
                  </h4>

                  <!-- Table -->
                  <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>name</th>
                          <th>description</th>
                          <th>link</th>
                          <th>date</th>
                          <th>image</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($projects as $projects)
                        <tr>
                          <td>{{ $projects->name }}</td>
                          <td>{{ $projects->description }}</td>
                          <td>{{ $projects->link }}</td>
                          <td>{{ $projects->date }}</td>
                          <td>{{ $projects->image }}</td>
                          <td>
                            <a href="{{ route('admin.projects.edit', $projects) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $projects->id) }}" method="POST" class="d-inline" id="delete-form-{{ $projects->id }}">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $projects->name }}', {{ $projects->id }})">Delete</button>
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
