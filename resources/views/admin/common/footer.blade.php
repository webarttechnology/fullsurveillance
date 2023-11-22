</div>
</div> <!-- End Content Wrapper -->

<!-- Footer -->
<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            Copyright &copy; All Rights Reserved.
        </p>
    </div>
</footer>

{{-- </div> --}}

<!-- Common Javascript -->
<script src="{{ asset('admin/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/slick/slick.min.js') }}"></script>

<!-- Chart -->
<script src="{{ asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/chart.js') }}"></script>

<!-- Google map chart -->
<script src="{{ asset('admin/assets/plugins/charts/google-map-loader.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/charts/google-map.js') }}"></script>

<!-- Date Range Picker -->
<script src="{{ asset('admin/assets/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/assets/js/date-range.js') }}"></script>

<!-- Datatables -->
<script src='{{ asset('admin/assets/plugins/data-tables/jquery.datatables.min.js') }}'></script>
<script src='{{ asset('admin/assets/plugins/data-tables/datatables.bootstrap5.min.js') }}'></script>
<script src='{{ asset('admin/assets/plugins/data-tables/datatables.responsive.min.js') }}'></script>

<!-- Option Switcher -->
{{-- <script src="{{ asset('admin/assets/plugins/options-sidebar/optionswitcher.js')}}"></script> --}}

<!-- Ekka Custom -->
<script src="{{ asset('admin/assets/js/ekka.js') }}"></script>

{{-- Font Awesome --}}
<script src="{{ asset('admin/assets/js/fontawesome.min.js') }}"></script>

{{-- Toast --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

{{-- Select2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('admin/assets/js/common.js') }}"></script>
<script src="{{ asset('admin/assets/js/main.js') }}"></script>
@yield('script')
</body>
</html>
