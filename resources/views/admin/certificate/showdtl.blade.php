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
                  <a href="{{route('admin.certificate.index')}}" class="btn btn-primary">back</a> <br>
                  <h2 class="card-title">
                    {{$certification->name}}
                  </h2>

                  <h4>issued by: {{$certification->issued_by}}</h4><br><br>
                  <h6>description:</h6><p>{{$certification->description}}</p>
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
