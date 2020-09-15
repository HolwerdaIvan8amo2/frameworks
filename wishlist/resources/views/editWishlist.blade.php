@extends('layouts.app')
@section('content')
    <div class="container">
        <form  enctype="multipart/form-data" method="post" action="/wish">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nintendo switch">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" class="description form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input name="price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="€420">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">URL</label>
                <input name="url" type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://www.coolblue.nl/product/838252/nintendo-switch-2019-upgrade-rood-blauw.html">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload image</label>
                <input name="wish_image" type="file" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <input name="submit" type="submit" class="form-control-file button-primary w-25" id="exampleFormControlFile1">
            </div>

        </form>
    </div>
@endsection
