<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    @include('admin.custom_css')
    <style type="text/css">
        .center{
            text-align: center;
            margin: auto;
            width: 100%;
            border: 1px solid white;
            margin-top: 60px;
        }

        th{
            background-color: skyblue;
            text-align: center;
            color: black;
            font-size: 15px;
            font-weight: bold;
            padding: 10px;
            border: 1px solid white;
        }
        tr{
            border: 1px solid white;
        }
        td{
            color: white;
            border: 1px solid white;
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
            <table class="center">
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Book Title</th>
                    <th>Quantity</th>
                    <th>Book Image</th>
                    <th>Borrow Status</th>
                </tr>
                @foreach ($data as $data)
                <tr>
                    <td>{{$data->user->name}}</td>
                    <td>{{$data->user->email}}</td>
                    <td>{{$data->user->phone}}</td>
                    <td>{{$data->book->title}}</td>
                    <td>{{$data->book->quantity}}</td>
                    <td>
                        <img style="height: 150px; width:90px;   display: block; margin-left: auto; margin-right: auto;" src="book/{{$data->book->book_img}}" alt="">
                    </td>
                    <td>{{$data->status}}</td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>