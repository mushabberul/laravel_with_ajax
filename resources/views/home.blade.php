@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a onclick="showModal()" class="btn btn-primary">Add New</a>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Upazilla</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.modal-xl')
@endsection
@push('script')
    <script>
        function showModal() {
            // alert('working');
            $('#saveDataModal').modal('show');
        }
    </script>
@endpush
