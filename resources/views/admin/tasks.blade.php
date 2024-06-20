@extends('admin.admin_master')

@section('admin')

    <div class="sl-mainpanel">

        <div class="page-content">
            <div class="container-fluid">

                <div class="container mt-5">
                    <h1>New Tasks</h1>
                    @if($tasks->isEmpty())
                        <p>No tasks found.</p>
                    @else
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Employee ID</th>
                                <th>Client ID</th>
                                <th>Deadline</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name}}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->price }} UAH</td>
                                    <td>{{ $task->employee_id}}</td>
                                    <td>{{ $task->client_id }}</td>
                                    <td>{{ $task->deadline }}</td>
                                    <td>{{ $task->created_at}}</td>
                                    <td>{{ $task->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
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
