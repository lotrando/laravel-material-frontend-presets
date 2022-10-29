<x-layout bodyClass="g-sidenav-show bg-gray-200">

  <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
  <div class="main-content position-relative max-height-vh-100 h-100 bg-gray-100">
    <!-- Navbar -->
    <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
    <!-- End Navbar -->
    <div class="container-fluid px-md-4 px-2">
      <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask bg-gradient-info opacity-6"></span>
      </div>
      <div class="card card-body mx-md-4 mt-n6 mx-3">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img class="w-100 border-radius-lg shadow-sm" src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ auth()->user()->name }}
              </h5>
              <p class="font-weight-normal mb-0 text-sm">
                CEO / Co-Founder
              </p>
            </div>
          </div>
          {{-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="material-icons position-relative text-lg">home</i>
                    <span class="ms-1">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons position-relative text-lg">email</i>
                    <span class="ms-1">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons position-relative text-lg">settings</i>
                    <span class="ms-1">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
        <div class="card card-plain h-100">
          <div class="card-header p-3 pb-0">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-3">Profile Information</h6>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            @if (session('status'))
              <div class="row">
                <div class="alert alert-success alert-dismissible text-white" role="alert">
                  <span class="text-sm">{{ Session::get('status') }}</span>
                  <button class="btn-close py-3 text-lg opacity-10" data-bs-dismiss="alert" type="button" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            @endif
            @if (Session::has('demo'))
              <div class="row">
                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                  <span class="text-sm">{{ Session::get('demo') }}</span>
                  <button class="btn-close py-3 text-lg opacity-10" data-bs-dismiss="alert" type="button" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            @endif
            <form method='POST' action='{{ route('user-profile') }}'>
              @csrf
              <div class="row">

                <div class="col-md-2 mb-3">
                  <label class="form-label">Personal number</label>
                  <input class="form-control border border-2 p-2" name="pernum" type="text" value='{{ old('pernum', auth()->user()->pernum) }}'>
                  @error('pernum')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                </div>

                <div class="col-md-5 mb-3">
                  <label class="form-label">Email address</label>
                  <input class="form-control border border-2 p-2" name="email" type="email" value='{{ old('email', auth()->user()->email) }}'>
                  @error('email')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                </div>

                <div class="col-md-5 mb-3">
                  <label class="form-label">Name</label>
                  <input class="form-control border border-2 p-2" name="name" type="text" value='{{ old('name', auth()->user()->name) }}'>
                  @error('name')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Phone</label>
                  <input class="form-control border border-2 p-2" name="phone" type="number" value='{{ old('phone', auth()->user()->phone) }}'>
                  @error('phone')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Location</label>
                  <input class="form-control border border-2 p-2" name="location" type="text" value='{{ old('location', auth()->user()->location) }}'>
                  @error('location')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label for="floatingTextarea2">About</label>
                  <textarea class="form-control border border-2 p-2" id="floatingTextarea2" name="about" placeholder=" Say something about yourself" rows="4" cols="50">{{ old('about', auth()->user()->about) }}</textarea>
                  @error('about')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                </div>
              </div>
              <button class="btn bg-gradient-success" type="submit">Submit</button>
            </form>

          </div>
        </div>
      </div>

    </div>
    <x-footers.auth></x-footers.auth>
  </div>
  <x-plugins></x-plugins>

</x-layout>
