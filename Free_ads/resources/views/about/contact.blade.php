@extends('layouts.app')

@section('content')


<div class="container marketing">
  <br>
  <br>
  <h1><span class="badge badge-secondary">LA DREAM TEAM</span></h1>
    <!-- Three columns of text below the carousel -->
    <br>
    <br>
    <br>   
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('images/avatar.png') }}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>Loïc</b></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">loic@worldcup.com</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('images/avatar2.webp') }}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>Bleine</b></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">bleine@worldcup.com</small></p>
                </div>
              </div>
            </div>
          </div>





        </div>



@endsection
