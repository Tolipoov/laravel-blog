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
              <li class="breadcrumb-item">Tags</li>
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
            <a href="{{route('admin.tag.create')}}" class="btn btn-primary btn-block my-3 w-25">Create tag</a>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th colspan="3" class="text-center">Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                   @foreach ($tags as $tag)
                    <tr>
                      <td>{{$tag->id}}</td>
                      <td>{{$tag->title}}</td>
                      <td><a href="{{route('admin.tag.show', $tag->id )}}"><i class="far fa-eye"></i></a></td>
                      <td><a href="{{route('admin.tag.edit', $tag->id )}}"><i class="fas fa-pencil-alt"></i></a></td>
                      <td>
                       <form action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
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