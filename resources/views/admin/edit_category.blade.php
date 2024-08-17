<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    @include('admin.custom_css')
    <style type="text/css">
      .div_deg{
        text-align: center;
        margin: auto;
      }

      .title_deg{
        color: white;
        padding: 40px;
        font-size: 30px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
              <div class="div_deg">
                <h2 class="title_deg">Update Category</h2>
                <form action="{{url('update_category',$data->id)}}" method="POST">
                  @csrf
                  <label for="">Category Name</label>
                  <input type="text" name="cat_name" value="{{$data->cat_title}}">
                  <input type="submit" name="" id="" class="btn btn-info" value="update">
                </form>
              </div>
          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>