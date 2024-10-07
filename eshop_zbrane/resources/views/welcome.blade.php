@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Welcome to Gun Store</h1>
    <p>This is a fictional gun store where you can find a wide selection of firearms, equipment, and other related products.</p>
    <p>Explore our categories and find the perfect gun for you.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Explore various categories of guns, including pistols, rifles, shotguns, and more.</p>
                    <a href="/categories" class="btn btn-primary">Browse Categories</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Equipment</h5>
                    <p class="card-text">Check out our wide range of equipment, including gun accessories, optics, and more.</p>
                    <a href="/equipment" class="btn btn-primary">Browse Equipment</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Others</h5>
                    <p class="card-text">Browse our collection of other related products and services.</p>
                    <a href="/others" class="btn btn-primary">Browse Others</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
