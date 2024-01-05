@extends("layouts.admin")
@section("content")
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('tag.store')}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="category_name">Tag Name:</label>
              <input type="text" class="form-control" name="tag_name" value="{{old('tag_name')}}">
              @error("tag_name")
               <span>{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="category_name">slug:</label>
              <input type="text" class="form-control" name="tag_slug" value="{{old('tag_slug')}}">
              @error("tag_slug")
                <span>{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="tag_description" value="{{old('tag_description')}}">
              @error("tag_description")
                <span>{{$message}}</span>
              @enderror
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
@endsection
