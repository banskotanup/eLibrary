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
    </style>
  </head>

<body>
    @include('home.header')
    <div class="currently-market">
        <div class="container">
          <div class="msg_center">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
                <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">X</button>
            </div>
            @endif
          </div>
          <div class="row">
            <div class="col-lg-6" style="margin-top: 100px;">
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">All Books</li>
                  @foreach($category as $category)
                  <li>
                    <a href="{{url('cat_search',$category->id)}}" style="color: white;" class="a_act">{{$category->cat_title}}</a>
                  </li>
                  @endforeach

                </ul>
              </div>
            </div>
            <form action="{{url('search')}}" method="get">
                @csrf
                <div class="row" style="margin: 30px;">               
                    <div class="col-md-8">
                        <input class="form-control" type="search" name="search" placeholder="Search for book title, auther name">
                    </div>
                    <div class="col-md-4">
                        <input class="btn btn-primary" type="submit" value="Search">
                    </div>
                </div>
            </form>
            <div class="col-lg-12">
              <div class="row grid" style="height: 150px; width:1300px; border-radius:20%;">
                @foreach ($data as $data)
                  <div class="col-lg-6 currently-market-item all msc">
                    <div class="item">
                      <div class="left-image" style="height: 400px;">
                        <img src="/book/{{$data->book_img}}" alt="" style="border-radius: 20px; width: 195px; height: 250px;">
                      </div>
                      <div class="right-content" style="height: 400px;">
                        <h4>{{$data->title}}</h4>
                        <span class="author">
                          <img src="/auther/{{$data->auther_img}}" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
                          <h6>{{$data->auther_name}}</h6>
                        </span>
                        <div class="line-dec"></div>
                        <span class="bid">
                          Current Available<br><strong>{{$data->quantity}}</strong><br> 
                        </span>
                        <div class="text-button">
                          <a href="{{url('book_details',$data->id)}}">View Book Details</a>
                        </div>
                      </br>
                        <div class="">
                          <a class="btn btn-primary" href="{{url('borrow_books',$data->id)}}">Apply to Borrow</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    
    @include('home.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->


  </body>
</html>