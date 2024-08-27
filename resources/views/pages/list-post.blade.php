@extends('layouts.app')

@section('title')
 Berkata || List Post
@endsection

@section('content')
   <div class="page-content page-form section-create-post" data-aos="fade-up">

    @if(session()->has('message'))
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{ session()->get('message') }}
      </div>
    @endif

    @if(session()->has('message2'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{ session()->get('message2') }}
      </div>
    @endif

      <div class="container-fluid">
        <div class="create-post-content ">
          <div class="row align-items-center justify-content-center">
            <div class="col-10">
               <div class="card">
                  <div class="card-body">
                    <h2 class=" form-title text-center mb-5 mt-2">List Post</h2>
                    <a class="btn btn-create-post px-4 py-2" href="{{ route('create-post') }}">Create Post</a>
                    <div class="table-responsive">
                      <table class="mt-4 table-hover scroll-horizontal-vertical w-100" id="idcrudTable">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Post Content</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($post as $post )
                          <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->email }}</td>
                            <td>{{ $post->date }}</td>
                            <td><a href="{{ route('details', $post->id) }}">{{ $post->title }}</a></td>
                            <td><img style="max-height: 100px; max-width:100px" src="/postimage/{{ $post->image }}"  /></td>
                            <td>{{ \Illuminate\Support\Str::limit($post->description, 50, '...') }}</td>
                            <td>
                              <a href="{{ url('update-post', $post->id) }}" type="button" class="btn btn-warning">Update</a>
                              <a href="{{ url('delete-post', $post->id) }}" type="button" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

{{-- @push('addon-script')
  <script>
    var datatable = $('crudTable').DataTable({
      processing: true, 
      sercerSide: true,
      ordering: true,
      ajax: {
        url: '{!! url()->current() !!}',
      },
      columns: [
        { data: 'id', name: 'id'},
        { data: 'name', name: 'name'},
        { data: 'email', name: 'email'},
        { data: 'date', name: 'date'},
        { data: 'description', name: 'description'},
        { 
          data: 'action', 
          name: 'action', 
          orderable: false, 
          searcable: false, 
          width: '15%'},
      ]
    })
  </script>
@endpush --}}