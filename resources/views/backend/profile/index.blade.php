@extends('layouts.master_backend_project')
@section('content')<!-- Start container-fluid  -->
<div class="container-fluid">
    <br><br><br><br>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">نمایه ادمین</a></li>

                    </ol>
                </div>
                <h4 class="page-title">نمایه ادمین</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ !empty($adminData->photo) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                         alt="profile-image">

                    <h4 class="mb-0">{{ $adminData->name }}</h4>
                    <p class="text-muted">{{ $adminData->email }}</p>

                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                    <div class="text-start mt-3">

                        <p class="text-muted mb-2 font-13"><strong> نام  : </strong> <span class="ms-2">{{ $adminData->name }}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>ایمیل / پست الکترونبک : </strong> <span class="ms-2">{{ $adminData->email }}</span></p>

                    </div>

                </div>
            </div> <!-- end card -->


        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">

                    <div class="tab-content">

                        <div class="" id="settings">
                            <form id="profileForm" action="{{ route('user.profile.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">نام</label>
                                            <input type="text" name="name" class="form-control" id="firstname" placeholder="نام خود را وارد کنید ..." value="{{ $adminData->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">ایمیل / پست الکترونیک : </label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="پست الکترونیک / ایمیل خود را وارد کنید ..." value="{{ $adminData->email }}">
                                        </div>
                                    </div> <!-- end col -->


                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">عکس نمایه</label>
                                            <input  name="photo" type="file" id="image" class="form-control">
                                            <br>
                                            <img src="{{ !empty($adminData->photo) ?
                                                          url('upload/admin_images/'.$adminData->photo) :
                                                          url('upload/no_image.jpg')}}"
                                                 class="rounded-circle avatar-lg img-thumbnail"
                                                 id="showImage"
                                                 alt="profile-image">
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-md-6">
                                        <div class="mb-3">

                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div>
            </div> <!-- end card-->

        </div> <!-- end col -->






    </div>
    <!-- end row-->

    <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
