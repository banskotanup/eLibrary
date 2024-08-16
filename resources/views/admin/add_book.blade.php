<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    @include('admin.custom_css')
    <style type="text/css">
        .div_center{
            text-align: center;
            margin: auto;
        }

        .title_deg{
            color: white;
            padding: 35px;
            font-size: 40px;
            font-weight: bold;
        }

        label{
            display: inline-block;
            width: 200px;
        }

        .div_pad{
            padding: 15px;
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
            <div class="div_center">
                <div>
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                        {{session()->get('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                      </div>
                      
                    @endif
                </div>
                <h1 class="title_deg">Add Books</h1>
                <form action="{{url('store_book')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_pad">
                        <label for="">Book Title</label>
                        <input type="text" name="book_name">
                    </div>
                    <div class="div_pad">
                        <label for="">Auther Name</label>
                        <input type="text" name="auther_name">
                    </div>
                    <div class="div_pad">
                        <label for="">Price</label>
                        <input type="text" name="price">
                    </div>
                    <div class="div_pad">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity">
                    </div>
                    <div class="div_pad">
                        <label for="">Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="div_pad">
                        <label for="">Category</label>
                        <select name="category" id="" required>
                            <option value="">Select a Category</option>
                            @foreach($data as $data)
                                <option value="{{$data->id}}">
                                    {{$data->cat_title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="div_pad">
                        <label for="">Book Image</label>
                        <input type="file" name="book_img">
                    </div>
                    <div class="div_pad">
                        <label for="">Auther Image</label>
                        <input type="file" name="auther_img">
                    </div>
                    <div class="div_pad">
                        <input type="submit" value="Add Book" class="btn btn-warning">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>