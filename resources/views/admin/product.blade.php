

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .title{
            color:white;
            padding-top:25px;
            font-size:25px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
          <h1 class="title">Add product</h1>

          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type='button' class='close' data-dismiss="alert">X</button>
            {{session()->get('message')}}
          </div>
          @endif


            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div style="padding:15px">
                    <label>Product title</label>
                    <input type="text" style="color:black;" name="title" placeholder="Give a product title" required="">
                </div>
        

                <div style="padding:15px">
                    <label>Price</label>
                    <input type="number" style="color:black;" name="price" placeholder="Give Price" required="">         
                </div>
        

                <div style="padding:15px">
                    <label>Description</label>
                    <input type="text" style="color:black;" name="des" placeholder="Give Description" required="">
                </div>
        

                <div style="padding:15px">
                    <label>Quantity</label>
                    <input type="number" style="color:black;" name="quantity" placeholder="Give Quantity" required="">
                </div>

                <div style="padding:15px">
                 <input type="file" name="file">
                </div>

                <div style="padding:15px">
                 <input class="btn btn-success" type="submit">
                </div>

            </form>
        </div>
</div>
        <!-- partial -->
          <!-- partial -->
        @include('admin.script')
  </body>
</html>