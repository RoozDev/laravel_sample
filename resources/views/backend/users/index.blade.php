@extends('layouts.master_backend_project')
@section('content')
<!-- Start container-fluid  -->
<div class="container-fluid">


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">کاربران</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">جدول داده ها</a></li>
                    </ol>
                </div>
                <h4 class="page-title">جدول داده ها</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">

        <div class="col-12">
            <div class="card">


                @include('backend.users.includes.modals.users_modal_includes')
                @include('backend.users.includes.modals.users_edit_modal_includes')
                @include('backend.users.includes.scripts.users_edit_script')
                @include('backend.users.includes.modals.users_sweetalert_modal')
                @include('backend.users.includes.modals.users_show_modal_includes')
                @include('backend.users.includes.scripts.users_show_script')


                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                        <thead>
                        <tr>
                            <th class="right-text">آیدی</th>
                            <th class="right-text">نام</th>
                            <th class="right-text">ایمیل / پست الکترونیک</th>
                            <th class="right-text">عملیات</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>
                                    <div class="button-list">
                                        <!-- Edit Modal -->
                                        <button id="editBtn" type="button" class="btn btn-warning btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#edit-modal"
                                                value="{{$user->id}}">
                                            <i class="ti-pencil"></i>
                                        </button>
                                        <a href="{{ route('users.destroy',$user['id']) }}"
                                           class="delete btn btn-danger btn-sm" id="delete">
                                            <i class="fe-trash-2"></i>
                                        </a>

                                        <!-- Show -->
                                        <button id="showBtn" type="button" class="btn btn-dark btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#show-modal"
                                                value="{{$user->id}}">
                                            <i class="fe-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


</div>
<!-- end container-fluid -->
@endsection



