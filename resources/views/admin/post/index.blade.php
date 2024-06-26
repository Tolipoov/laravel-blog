@extends('admin.layouts.sidebarHead')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
              <li class="breadcrumb-item">Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row ">
          <div class="w-100">
            <a href="{{route('admin.post.create')}}" class="btn btn-primary btn-block my-3 w-25">Create post</a>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Categories</th>
                      <th>Tags</th>
                      <th colspan="3" class="text-center">Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                   @foreach ($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->category?->title}}</td>
                      <td>
                      {{-- @foreach ($post->tags as $tag)
                          {{ $tag->title . ', '}}   
                      @endforeach --}}
                      {{ implode(', ', $post->tags->pluck('title')->toArray()) }}   
                     </td>
                      <td><a href="{{route('admin.post.show', $post->id )}}"><i class="far fa-eye"></i></a></td>
                      <td><a href="{{route('admin.post.edit', $post->id )}}"><i class="fas fa-pencil-alt"></i></a></td>
                      <td>
                       <form action="{{route('admin.post.delete', $post->id)}}" method="POST">
                        @csrf
                        @method('delete')
                          <button class="btn bg-transparent border-0">
                            <i class="fas fa-trash" style="color:red"></i>
                          </button>
                       </form>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @endsection