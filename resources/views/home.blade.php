@extends('layouts.app')
@section('content')
<div class="container">
<div class="row p-5">
    <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-2">
        <div class="card section-cards">
            <img src="assets\img\cinema.webp" class="card-img-top" alt="cinema">
          </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-2">
        <div class="card section-cards">
            <img src="assets\img\litt.jpeg" class="card-img-top" alt="litterature">
          </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-2">
        <div class="card section-cards">
            <img src="assets\img\art.webp" class="card-img-top" alt="art">
          </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-2">
        <div class="card section-cards">
            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
          </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-2">
        <div class="card section-cards">
            <img src="assets\img\archive.jpg" class="card-img-top" alt="...">
          </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-2">
        <div class="card section-cards">
            <img src="assets\img\personality.jpg" class="card-img-top" alt="...">
          </div>
    </div>
</div>
@endsection
