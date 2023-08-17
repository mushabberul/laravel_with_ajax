@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2>JSON</h2>
                        <div class="data"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        let data = `[{
                "name": "a",
                "email": "a@gmail.com"
            },
            {
                "name": "b",
                "email": "b@gmail.com"
            }
        ]`;

        data = JSON.parse(data);

        $.each(data, function(key, value) {
            console.log("Name: " + value.name + "Email: " + value.email);
        });
    </script>
@endpush
