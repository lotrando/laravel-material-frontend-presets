<x-layout bodyClass="bg-gray-200">

  <div class="position-sticky z-index-sticky container top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <x-navbars.navs.guest signin='login' signup='register'></x-navbars.navs.guest>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100"
      style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pe-1 py-3">
                  <h4 class="font-weight-bolder mt-2 mb-0 text-center text-white">{{ __('Reset password') }}</h4>
                  <p class="text-light p-2 text-center">{{ __('You will receive an reset e-mail') }}</p>
                </div>
              </div>
              <div class="card-body">
                @if (Session::has('status'))
                  <div class="alert alert-success alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{ Session::get('status') }}</span>
                    <button class="btn-close py-3 text-lg opacity-10" data-bs-dismiss="alert" type="button" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @elseif (Session::has('email'))
                  <div class="alert alert-danger alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{ Session::get('email') }}</span>
                    <button class="btn-close py-3 text-lg opacity-10" data-bs-dismiss="alert" type="button" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
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
                <form class="text-start" role="form" method="POST" action="{{ route('verify') }}">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="email">
                  </div>
                  @error('email')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                  <div class="text-center">
                    <button class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit">{{ __('Send') }}</button>
                  </div>
                  <p class="mt-4 text-center text-sm">
                    Don't have an account?
                    <a class="text-primary text-gradient font-weight-bold" href="{{ route('register') }}">Sign up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-footers.guest></x-footers.guest>
    </div>
  </main>
  @push('js')
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script>
      $(function() {

        var text_val = $(".input-group input").val();
        if (text_val === "") {
          $(".input-group").removeClass('is-filled');
        } else {
          $(".input-group").addClass('is-filled');
        }
      });
    </script>
  @endpush
</x-layout>
