@extends('master')

@section('content')

    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            @if(count($errors))
                <ul class="list-group mt-3">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-info">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    Insert
                </div>
                <div class="card-body">
                    <form action="{{ route('create') }}" method="post">
                        @csrf
                        <div class="row form-group">
                            <div class="col">
                                <label for="lat">Latitude</label>
                                <input type="number" step="0.01" name="lat" id="lat" class="form-control" placeholder="Latitude" required>
                            </div>
                            <div class="col">
                                <label for="lng">Longitude</label>
                                <input type="number" step="0.01" name="lng" id="lng" class="form-control" placeholder="Longitude" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary">
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
                            <label for="lat1">Latitude</label>
                            <input type="number" step="0.01" name="lat" id="lat1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lng1">Longitude</label>
                            <input type="number" step="0.01" name="lng" id="lng1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="count">Count</label>
                            <input type="number" step="1" name="count" id="count" class="form-control" value="10" required>
                        </div>
                        <p><input type="submit" class="btn btn-primary"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection