
    <aside class="control-sidebar control-sidebar-dark">

        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>


    <footer class="main-footer">

        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>

        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>



    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        $(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        });

        function notification(type,message,title=null){
                switch (type) {
                case "success":
                    toastr.success(message,title);
                    break;

                case "warning":
                    toastr.warning(message,title);
                    break;

                case "error":
                    toastr.error(message,title);
                    break;

                default:
                    break;
                }
            }
    </script>

    @yield('scripts')
