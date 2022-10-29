<x-layout bodyClass="g-sidenav-show  bg-gray-200">

  <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
              <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                <h6 class="mx-3 text-white"><strong> Add, Edit, Delete features are not
                    functional!</strong> This is a<strong> PRO</strong> feature! Click
                  <strong><a class="text-white" href="https://www.creative-tim.com/product/material-dashboard-pro-laravel" target="_blank"><u>here</u> </a></strong>to see
                  the PRO product!
                </h6>
              </div>
            </div>
            <div class="me-3 my-3 text-end">
              <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                User</a>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="align-items-center mb-0 table">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        ID
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        PHOTO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        NAME</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                        EMAIL</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                        ROLE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                        CREATION DATE
                      </th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm">1</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img class="avatar avatar-sm me-3 border-radius-lg" src="{{ asset('assets') }}/img/team-2.jpg" alt="user1">
                          </div>

                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">John</h6>

                        </div>
                      </td>
                      <td class="text-center align-middle text-sm">
                        <p class="text-secondary mb-0 text-xs">john@creative-tim.com
                        </p>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">Admin</span>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">22/03/18</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-success btn-link" data-original-title="" href="" title="" rel="tooltip">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>

                        <button class="btn btn-danger btn-link" data-original-title="" type="button" title="">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm">2</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img class="avatar avatar-sm me-3 border-radius-lg" src="{{ asset('assets') }}/img/team-3.jpg" alt="user2">
                          </div>

                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Alexa</h6>

                        </div>
                      </td>
                      <td class="text-center align-middle text-sm">
                        <p class="text-secondary mb-0 text-xs">
                          alexa@creative-tim.com</p>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">Creator</span>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">16/06/18</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-success btn-link" data-original-title="" href="" title="" rel="tooltip">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>
                        <button class="btn btn-danger btn-link" data-original-title="" type="button" title="">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm">3</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img class="avatar avatar-sm me-3 border-radius-lg" src="{{ asset('assets') }}/img/team-4.jpg" alt="user3">
                          </div>

                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Laurent</h6>

                        </div>
                      </td>
                      <td class="text-center align-middle text-sm">
                        <p class="text-secondary mb-0 text-xs">
                          laurent@creative-tim.com</p>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">Member</span>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">30/06/18</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-success btn-link" data-original-title="" href="" title="" rel="tooltip">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>
                        <button class="btn btn-danger btn-link" data-original-title="" type="button" title="">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm">4</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img class="avatar avatar-sm me-3 border-radius-lg" src="{{ asset('assets') }}/img/team-3.jpg" alt="user4">
                          </div>

                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Michael</h6>
                        </div>
                      </td>
                      <td class="text-center align-middle text-sm">
                        <p class="text-secondary mb-0 text-xs">
                          michael@creative-tim.com</p>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">Member</span>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">16/06/19</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-success btn-link" data-original-title="" href="" title="" rel="tooltip">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>
                        <button class="btn btn-danger btn-link" data-original-title="" type="button" title="">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm">5</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img class="avatar avatar-sm me-3 border-radius-lg" src="{{ asset('assets') }}/img/team-2.jpg" alt="user5">
                          </div>

                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Richard</h6>
                        </div>
                      </td>
                      <td class="text-center align-middle text-sm">
                        <p class="text-secondary mb-0 text-xs">
                          richard@creative-tim.com</p>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">Creator</span>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">16/06/18</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-success btn-link" data-original-title="" href="" title="" rel="tooltip">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>
                        <button class="btn btn-danger btn-link" data-original-title="" type="button" title="">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm">6</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img class="avatar avatar-sm me-3 border-radius-lg" src="{{ asset('assets') }}/img/team-4.jpg" alt="user6">
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Miriam</h6>
                        </div>
                      </td>
                      <td class="text-center align-middle text-sm">
                        <p class="text-secondary mb-0 text-xs">
                          miriam@creative-tim.com</p>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">Creator</span>
                      </td>
                      <td class="text-center align-middle">
                        <span class="text-secondary font-weight-bold text-xs">26/06/18</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-success btn-link" data-original-title="" href="" title="" rel="tooltip">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>
                        <button class="btn btn-danger btn-link" data-original-title="" type="button" title="">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-footers.auth></x-footers.auth>
    </div>
  </main>
  <x-plugins></x-plugins>

</x-layout>
