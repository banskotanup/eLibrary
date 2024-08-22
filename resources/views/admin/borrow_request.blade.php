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

        .td_css{
          padding: 10px;
          margin: 10px;
          margin-inline: 10px;
          margin-bottom: 30px;

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
                    <th>Change Status</th>
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
                    <td>
                      @if ($data->status == 'Approved')
                          <span style="color: lightgreen">{{$data->status}}</span>    
                      @endif
                      @if ($data->status == 'Rejected')
                          <span style="color: #D0342C">{{$data->status}}</span>    
                      @endif
                      @if ($data->status == 'Returned')
                          <span style="color: yellow">{{$data->status}}</span>    
                      @endif
                      @if ($data->status == 'Applied')
                          <span style="color: white">{{$data->status}}</span>    
                      @endif
                      @if ($data->status == 'Cancelled')
                          <span style="color: grey;">{{$data->status}}</span>    
                      @endif
                    </td>
                    <td class="td_css">
                      @if ($data->status == 'Applied')
                        <div>
                          <a style="height: 40px; width:90px;" href="{{url('approve_book',$data->id)}}" class="btn btn-warning">Approve</a>
                        </div>
                        <div style="margin-top:4px;">
                          <a style="height: 40px; width:90px;" href="{{url('rejected_book',$data->id)}}" class="btn btn-danger">Reject</a>
                        </div>
                        <div style="margin-top:4px;">
                          <a style="height: 40px; width:90px;" href="{{url('return_book',$data->id)}}" class="btn btn-info">Returned</a>
                        </div>         
                      @else
                          <p style="color: white; font-weight: bold;">Not Allowed</p>
                                
                      @endif
                    </td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>