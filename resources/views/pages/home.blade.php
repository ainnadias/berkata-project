@extends('layouts.app')

@section('title')
    Berkata || Homepage
@endsection

@section('content')
    <!-- Hero Section -->
    <div class="page-content page-home">
      <section class="section-post-hero">
        <div class="container">
          <div class="row align-items-center row-hero">
            <div class="col-lg-6 text-center">
              <img src="/images/hero-img.png" alt="" class="w-100 mb-4 mb-lg-none" />
            </div>
            <div class="col-lg-5 text-center mb-md-4 mb-sm-4">
              <h2>Share What You Know !</h2>
              <p>Create and publish your article today to inspire, educate, and connect with others. Your voice matters—make an impact by sharing your unique insights and experiences with the world.</p>
              <a class="btn btn-create-post px-4 py-2" href="{{ route('create-post') }}">Create Post</a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Akhir Hero Section -->

    <section class="post-new">
      <div class="container">
        <!-- <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h4>- Blog-</h4>
          </div>
        </div> -->
        <div class="row">

          @foreach ($post as $post )
          <div class="col-6 col-lg-4 d-block" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details', $post->id) }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/postimage/{{ $post->image }}" class="w-100 mb-2" alt="" />
                <div class="post-title">{{ $post->title }}</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">{{ $post->name }}</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">{{ $post->date }}</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach


          {{-- <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-2.png" class="w-100 mb-2" alt="" />
                <div class="post-title">Interior Design: Transforming Spaces</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">Emily Johnson</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-3.png" class="w-100 mb-2" alt="" />
                <div class="post-title">The Benefits of Daily Journaling</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">Kevin N</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-4.png" class="w-100 mb-2" alt="" />
                <div class="post-title">Future Trends in Business</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">David Miller</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-5.png" class="w-100 mb-2" alt="" />
                <div class="post-title">The Power of Traditional Medicine</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">James Wilson</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-6.png" class="w-100 mb-2" alt="" />
                <div class="post-title">How Robots Will Shape Our Future</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">Ashley Moore</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-7.png" class="w-100 mb-2" alt="" />
                <div class="post-title">The Fascinating World of Owls</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">Christopher Taylor</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-8.png" class="w-100 mb-2" alt="" />
                <div class="post-title">Understanding Solar Eclipses</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">Amanda Anderson</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('details') }}" class="card card-post d-block">
              <div class="card-body">
                <img src="/images/img-post-9.png" class="w-100 mb-2" alt="" />
                <div class="post-title">Almonds and Peanuts: A Healthy Snack</div>
                <div class="row">
                  <div class="col-6">
                    <div class="post-author">Sarah Davis</div>
                  </div>
                  <div class="col-6">
                    <div class="post-date">January 24, 2020</div>
                  </div>
                </div>
              </div>
            </a>
          </div> --}}
        </div>
      </div>
    </section>
@endsection