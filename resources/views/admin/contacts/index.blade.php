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
                    <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary">Create Data</a>
                  </h4>

                  <!-- Table -->
                  <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>name</th>
                          <th>address</th>
                          <th>gmail</th>
                          <th>whatsapp</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($contacts as $items)
                        <tr>
                          <td>{{ $items->name }}</td>
                          <td>{{ $items->address }}</td>
                          <td>{{ $items->gmail }}</td>
                          <td>{{ $items->whatsapp }}</td>
                          <td>
                            <a href="{{ route('admin.contacts.edit', $items) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.contacts.destroy', $items->id) }}" method="POST" class="d-inline" id="delete-form-{{ $items->id }}">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $items->name }}', {{ $items->id }})">Delete</button>
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
