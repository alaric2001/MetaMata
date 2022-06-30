<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#547794">
    <div class="container-fluid" style="padding-left: 178px; padding-right: 178px">
      <a class="navbar-brand" href="/resep">ResepKu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li> --}}
          {{-- disabled --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Disabled</a>
          </li> --}}
        </ul>
        <div class="" style="padding-left: 860px">
            <ul class="navbar-nav">
                <li>
                    <li class="nav-item">
                        <a class="nav-link" href="/addresep">Tulis Resep</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" style="text-decoration: none; ">
                              {{ __('Logout') }} 
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                </li>
            </ul>
        </div>
        
      </div>
    </div>
  </nav>