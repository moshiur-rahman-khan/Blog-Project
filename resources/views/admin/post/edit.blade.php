@extends('admin/layouts/app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">


        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Titles</h3>
          </div>


         @include('includes.messages')



          {{-- @if ($errors->any())
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
              @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
              @endforeach
            </ul>
          </div>
          @endif --}}



          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action=" {{ route('post.update',$post->id) }} " method="post">
           @csrf
           {{ method_field('PATCH') }}
            <div class="box-body">
             <div class="col-lg-6">

               <div class="form-group">
                 <label for="title">Post Title</label>
                 <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
               </div>
               <div class="form-group">
                <label for="title">Post Sub Title</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title" value="{{ $post->subtitle }}">
              </div>
              <div class="form-group">
                <label for="title">Post Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ $post->slug }}">
              </div>

            </div>

            <div class="col-lg-6">
             <div class="form-group">
              <label for="image">Upload Image:</label>
              <input type="file" id="image" name="image">

              <p class="help-block">Example block-level help text here.</p>
            </div>


            <div class="checkbox">
              <label>
                <input type="checkbox" name="status" @if ($post->status == 1) checked @endif>Publish
              </label>
            </div>
          </div>

        </div>
        <!-- /.box-body -->


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Write Post Here
          <small>Simple and fast</small>
        </h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        
          <textarea class="textarea" placeholder="Place some text here" name="body" 
          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
        
      </div>
    </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('post.index') }}" class="btn btn-success">Back</a>
        </div>
      </form>
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>

@endsection

@section('footerSection')

<script src=" {{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>
<script src=" {{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
   
  });
</script>
@endsection