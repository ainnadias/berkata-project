@extends('layouts.app')

@section('title')
 Berkata || Update Post
@endsection

@section('content')
   <div class="page-content page-form section-create-post" data-aos="fade-up">

    @if(session()->has('message'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{ session()->get('message') }}
      </div>
    @endif

      <div class="container">
        <div class="create-post-content">
          <div class="row">
            <div class="col-12">
              {{-- <form action=""> --}}
                <form action="{{ route('send-update-post', $post->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="card">
                  <div class="card-body">
                    <h2 class="form-title text-center mb-5 mt-2">Update Post</h2>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">your name</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">email</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}" />
                        </div>
                      </div>
                      {{-- <div class="col-md-6">
                        <div class="form-group">
                          <label for="category">category</label>
                          <select class="form-control" id="category" name="category">
                            <option value="business">business</option>
                            <option value="art">art</option>
                            <option value="animal">animal</option>
                            <option value="technology">technology</option>
                            <option value="nature">nature</option>
                            <option value="home">home</option>
                          </select>
                        </div>
                      </div> --}}
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="date">date post</label>
                          <input type="date" class="form-control" id="date" name="date" value="{{ $post->date }}" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="post-thumbnail">update thumbnail image</label>
                          <input type="file" name="image" class="form-control" value="{{ $post->image }}">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="title">title</label>
                          <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="description">post content</label>
                          <textarea rows="10" class="form-control" name="description" id="description">{{ $post->description }}</textarea>
                        </div>
                      </div>
                      
                     
                    <div class="row mx-2 my-3 ml-auto">
                      <div class="col">
                        <button type="submit" class="btn btn-create-post px-4 py-2">Publish Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection