@include('partials.notify')

          

              <footer class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-6">
                              <script>document.write(new Date().getFullYear())</script> © {{siteName()}}.
                          </div>
                          <div class="col-sm-6">
                              <div class="text-sm-end d-none d-sm-block">
                                  Design & Develop by Themesbrand
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->

      </div>
      <!-- END layout-wrapper -->

      <!-- Right Sidebar -->
      <div class="right-bar">
          <div data-simplebar class="h-100">
              <div class="rightbar-title d-flex align-items-center px-3 py-4">
          
                  <h5 class="m-0 me-2">Settings</h5>

                  <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                      <i class="mdi mdi-close noti-icon"></i>
                  </a>
              </div>

              <!-- Settings -->
              <hr class="mt-0" />
              <h6 class="text-center mb-0">Choose Layouts</h6>

              <div class="p-4">
                  <div class="mb-2">
                      <img src="{{ asset('') }}assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                  </div>

                  <div class="form-check form-switch mb-3">
                      <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                      <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                  </div>
  
                  <div class="mb-2">
                      <img src="{{ asset('') }}assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                  </div>
                  <div class="form-check form-switch mb-3">
                      <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                      <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                  </div>
  
                  <div class="mb-2">
                      <img src="{{ asset('') }}assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                  </div>
                  <div class="form-check form-switch mb-3">
                      <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                      <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                  </div>

                  <div class="mb-2">
                      <img src="{{ asset('') }}assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                  </div>
                  <div class="form-check form-switch mb-5">
                      <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                      <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                  </div>

          
              </div>

          </div> <!-- end slimscroll-menu-->
      </div>
      <!-- /Right-bar -->

      <!-- Right bar overlay-->
      <div class="rightbar-overlay"></div>

      <!-- JAVASCRIPT -->
      <script src="{{ asset('') }}assets/libs/jquery/jquery.min.js"></script>
      <script src="{{ asset('') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('') }}assets/libs/metismenu/metisMenu.min.js"></script>
      <script src="{{ asset('') }}assets/libs/simplebar/simplebar.min.js"></script>
      <script src="{{ asset('') }}assets/libs/node-waves/waves.min.js"></script>

      <!-- apexcharts -->
      <script src="{{ asset('') }}assets/libs/apexcharts/apexcharts.min.js"></script>

      <!-- dashboard init -->
      <script src="{{ asset('') }}assets/js/pages/dashboard.init.js"></script>

        <!-- Required datatable js -->
    <script src="{{ asset('') }}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('') }}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('') }}assets/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('') }}assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('') }}assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('') }}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('') }}assets/js/pages/datatables.init.js"></script>
    
      <!-- App js -->
        <!-- select 2 plugin -->
    <script src="{{asset('')}}assets/libs/select2/js/select2.min.js"></script>

    <!-- dropzone plugin -->
    <script src="{{asset('')}}assets/libs/dropzone/min/dropzone.min.js"></script>

    <!-- init js -->
    <script src="{{asset('')}}assets/js/pages/ecommerce-select2.init.js"></script>


    <script src="{{asset('')}}assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <script src="{{asset('')}}assets/js/pages/ecommerce-cart.init.js"></script>


      <script src="{{ asset('') }}assets/js/app.js"></script>
  </body>

</html>