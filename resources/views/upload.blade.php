@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload bukti pembayaran') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="shipping_name" class="form-control {{$errors->has('shipping_name')? 'is-invalid' : ''}}" value="{{Auth::user()? Auth::user()->id : ''}}" placeholder="Name">
                        
                        <input type="file" class="form-control" name="filename" required>

                        <div class="form-group row mt-3 p-3">
                           
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection