@extends('admin.admin_master')

@section('admin')

    <div class="sl-mainpanel">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card"><br><br>
                            <div class="card-body">
                                <h4 class="card-title">Name : {{ $adminData->name }} </h4>
                                <hr>
                                <h4 class="card-title">User Email : {{ $adminData->email }} </h4>
                                <hr>
                                <h4 class="card-title">User Name : {{ $adminData->username }} </h4>
                                <hr>
                                <a href="" class="btn btn-info btn-rounded waves-effect waves-light"> Edit Profile</a>

                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>


        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
                <div>Made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                   href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                   href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div>

@endsection