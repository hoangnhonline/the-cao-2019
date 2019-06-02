@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding: 50px">
               
                <div class="card-body" style="padding: 15px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bạn đã đăng nhập thành công !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
