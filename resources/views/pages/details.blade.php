@extends('layouts.app')

@section('title')
 Berkata || Detail Artikel
@endsection

@section('content')
    <!-- Details -->
    <div class="page-content section-details-post" data-aos="fade-up">
      <div class="container">
        <div class="post-heading">
          <p class="post-subtitle">Detail Blog / {{ $post->title }}</p>
        </div>
        <div class="post-content" id="">
          <div class="row">
            <div class="col-12">
              <div class="card-post">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="post-title-detail">{{ $post->title }}</h2>
                      <div class="row my-3">
                        <div class="col-6">
                          <div class="post-author">{{ $post->name }}</div>
                        </div>
                        <div class="col-6 text-right">
                          <div class="post-date">{{ $post->date }}</div>
                        </div>
                      </div>
                      <img src="/postimage/{{ $post->image }}" class="w-100" alt="" />
                    </div>
                    <div class="post-content-article">
                      <div class="row">
                        <div class="col-12 mt-3">
                          <p >
                        {{ $post->description }}
                      </p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir details -->

@endsection