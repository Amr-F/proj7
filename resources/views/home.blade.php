@extends('layouts.app')

@section('content')
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!  {{Auth::user()-> name}}
                </div>

                <div class="card-header">
                    <button onclick=" relocate_create_supplier()" type="button" class="btn btn-primary btn-lg" >Create New Supplier</button></div>
                <script>
                    function relocate_create_supplier()
                    {
                        location.href = "/supplier/create";
                    }
                </script>
<div></div>
                <div class="card-header">
                    <button onclick=" relocate_index_supplier()" type="button" class="btn btn-primary btn-lg" >Index All Supplier</button></div>
                <script>
                    function relocate_index_supplier()
                    {
                        location.href = "/supplier/index";
                    }
                </script>

            </div>
        </div>
    </div>
</div>
            </div>
        </div>


@endsection
