<!-- Signup modal content -->
<div id="show-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="24">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="24">
                            </span>
                        </a>
                    </div>
                </div>

                <form id="my_show_form" class="px-3" action="{{ route('users.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id">
                    <div class="mb-3">
                        <label for="name" class="form-label">نام : </label>
                        <input name="name" class="form-control" type="text" id="name" required="" placeholder="نام خود را وارد کنید ...">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل / پست الکترونیک</label>
                        <input name="email" class="form-control" type="text" id="email" required="" placeholder="ایمیل / پست الکترونیک خود را وارد کنید ...">
                    </div>


                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

