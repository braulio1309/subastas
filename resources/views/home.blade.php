@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Puja</div>

                <div class="card-body">
                    <form action="{{ route('pujar')}}" method="POST">
                        <input type="submit" value="subir">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
