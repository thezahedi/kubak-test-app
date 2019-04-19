@extends('master')

@section('content')

    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            @if(count($errors))
                <ul class="list-group mt-3">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    Insert
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="text" name="lat" id="lat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lng">Longitude</label>
                            <input type="text" name="lng" id="lng" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    Search
                </div>
                <div class="card-body">
                    <form method="get" action="{{ route('search') }}">
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="text" name="lat" id="lat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lng">Longitude</label>
                            <input type="text" name="lng" id="lng" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="count">Count</label>
                            <input type="number" name="count" id="count" class="form-control">
                        </div>
                        <p><input type="submit" class="btn btn-primary"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection