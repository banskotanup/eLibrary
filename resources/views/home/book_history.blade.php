<!DOCTYPE html>
<html lang="en">

  <head>
    @include('home.css')
    @include('admin.custom_css')
    <style type="text/css">
    .msg_center{
      text-align: center;
      margin-top: 50px;
      padding: 10px;
    }
    .table_deg{
        text-align: center;
        margin: auto;
        width: 100%;
        border: 1px solid white;
        margin-top: 200px:
    }
    th{
        background-color: skyblue;
        color: black;
        font-weight: bold;
        font-size: 18px;
        border: 1px solid white;
        padding: 10px;
    }
    td{
        color: white;
        border: 1px solid white;
    }
    .book_img{
        height: 100px;
        width: 80px;

    }
    .section-heading{
        margin-top: 10px;
        margin-bottom: 20px;
    }
    </style>
  </head>

<body>
    @include('home.header')
    <div class="currently-market">
        <div class="container">
          <div class="row">
            <div class="msg_center">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">X</button>
                </div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2><em>My</em> History</h2>
                </div>
              </div>
              <div class="div_css">
                
                <table class="table_deg">
                    <tr>
                        <th>Book Name</th>
                        <th>Book Author</th>
                        <th>Book Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $data)
                        <tr>
                            <td>{{$data->book->title}}</td>
                            <td>{{$data->book->auther_name}}</td>
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
                                @if ($data->status == 'Pending-Return-Verification')
                                    <span style="color: skyblue;">{{$data->status}}</span>    
                                @endif
                            </td>
                            <td>
                                <img class="book_img" src="/book/{{$data->book->book_img}}" alt="">
                            </td>
                            <td>
                                @if ($data->status == 'Applied')
                                    <a class="btn btn-danger" href="{{url('cancel_req',$data->id)}}">Cancel</a>
                                @elseif ($data->status == 'Approved')
                                <a class="btn btn-warning" href="{{url('ret_books',$data->id)}}">Return</a>
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
    </div>
    @include('home.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->


  </body>
</html>