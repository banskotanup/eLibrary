<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    @include('admin.custom_css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style type="text/css">
        .table_center{
            text-align: center;
            margin: 1px;
            width: 100%;
            border: 1px solid white;
            margin-top: 50px:
        }

        th{
            background-color: skyblue;
            text-align: center;
            padding: auto;
            font-size: 15px;
            font-weight: bold;
            color: black;
            border: 1px solid white;
        }

        td{
            color: white;
            border: 1px solid white;
            padding: 10px;

        }

        .des{
            color: white;
            text-align: justify;

        }

        .img_auther{
            width: 80px;
            height: 100px;
            border-radius: 50%;
        }

        .img_book{
            width: 80px;
            height: 100px;
        }

        .td_css{
          padding: 10px;
          margin: auto;
          margin-inline: 10px;
          margin-bottom: 1px;

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
            <div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    </div>
                @endif
                <table class="table_center">
                    <tr>
                        <th>Book Title</th>
                        <th>Auther Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Author Image</th>
                        <th>Book Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($book as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->auther_name}}</td>
                        <td>{{$book->price}}</td>
                        <td>{{$book->quantity}}</td>
                        <td class="des">{{$book->description}}</td>
                        <td>{{$book->category->cat_title}}</td>

                        <td>
                            <img class="img_auther" src="auther/{{$book->auther_img}}" alt="">
                        </td>
                        <td>
                            <img class="img_book" src="book/{{$book->book_img}}" alt="">
                        </td>
                        <td class="td_css">
                            <div>
                                <a href="{{url('edit_book',$book->id)}}" class="btn btn-info" style="height: 40px; width:90px;">Update</a>
                            </div>
                            <div style="margin-top:4px;">
                                <a onclick="confirmation(event)" href="{{url('book_delete',$book->id)}}" class="btn btn-danger" style="height: 40px; width:90px;">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>
        </div>
        
      </div>
        @include('admin.footer')

        <script type="text/javascript">
            function confirmation(ev) { 
              ev.preventDefault(); 
              var urlToRedirect = ev.currentTarget.getAttribute('href'); 
              console.log(urlToRedirect); 
            swal({ 
            title: "Are you sure to Delete this", 
            text: "You will not be able to revert this!", 
            icon: "warning",
            buttons: true, 
            dangerMode: true, 
            })
          .then((willCancel) => { 
            if (willCancel) { 
              window.location.href= urlToRedirect; 
            }
          });
        }
    </script>
  </body>
</html>