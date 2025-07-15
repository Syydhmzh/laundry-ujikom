@extends('app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $title }}</h3>
                <form action="{{ route('customer.update', $customer->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $customer->name }}"  placeholder="Masukkan Nama customer" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">phone</label>
                        <input type="tel" value="{{ $customer->phone }}"  placeholder="Masukkan Nama customer" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                        <textarea  name="address" class="form-control" required>{{ $customer->address }}</textarea>

                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection
