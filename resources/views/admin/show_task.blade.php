@extends('admin.admin_master')

@section('admin')

    <div class="sl-mainpanel">

        <div class="page-content">
            <div class="container-fluid">
                <div class="container mt-5">
                    <h1 class="mb-4">Task Details</h1>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Task Name: {{ $task->name }}</h5>
                            <p class="card-text"><strong>Description:</strong> {{ $task->description }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ $task->price }} UAH</p>
                            <p class="card-text"><strong>Employee ID:</strong> {{ $task->employee_id }}</p>
                            <p class="card-text"><strong>Client ID:</strong> {{ $task->client_id }}</p>
                            <p class="card-text"><strong>Deadline:</strong> {{ $task->deadline }}</p>
                            <p class="card-text"><strong>Status:</strong>
                                <div class="dropdown">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="statusDropdown{{ $task->id }}"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $task->status }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="statusDropdown{{ $task->id }}">
                                        <a class="dropdown-item" href="#" onclick="updateStatus({{ $task->id }}, 'new')">New</a>
                                        <a class="dropdown-item" href="#" onclick="updateStatus({{ $task->id }}, 'progress')">Progress</a>
                                        <a class="dropdown-item" href="#" onclick="updateStatus({{ $task->id }}, 'done')">Done</a>
                                        <a class="dropdown-item" href="#" onclick="updateStatus({{ $task->id }}, 'cancelled')">Cancelled</a>
                                    </div>
                                </div>
                                </div>
                            <p class="card-text"><strong>Created At:</strong> {{ $task->created_at }}</p>
                            <p class="card-text"><strong>Updated At:</strong> {{ $task->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2024. LabForBeer. All Rights Reserved.</div>
                <div>Made by DevBricks</div>
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

    <script>
        function updateStatus(taskId, status) {
            $.ajax({
                url: '/tasks/' + taskId + '/update-status',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                    console.log(response); // Виводимо відповідь сервера в консоль
                    location.reload(); // Оновлюємо сторінку після успішного оновлення статусу
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText); // Виводимо помилку в консоль
                }
            });
        }
    </script>
@endsection
