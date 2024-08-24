<div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>
              <li data-filter=".msc">Popular</li>
              <li data-filter=".dig">Latest</li>  
              
            </ul>
          </div>
        </div>
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
                      <img src="/auther/{{$data->auther_img}}" style="width: 50px; height: 50px; border-radius: 50%;">
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
