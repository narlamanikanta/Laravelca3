

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
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
        <!-- partial -->

            <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
                 <div class="container" align="center">
                 @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type='button' class='close' data-dismiss="alert">X</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                    <table>
                        <tr style="background-color:grey;">
                            <td style="padding:20px;">Title</td>
                            <td style="padding:20px;">Description</td>
                            <td style="padding:20px;">Quantity</td>
                            <td style="padding:20px;">Price</td>
                            <td style="padding:20px;">Image</td>
                            <td style="padding:20px;">Update</td>
                            <td style="padding:20px;">Delete</td>
                        </tr>

                        @foreach($data as $product)

                        <tr style="background-color:black;" align="center">
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td><img height="100" width="100" src="/productimage/{{$product->image}}"></td>

                            <td>
                                <a class="btn btn-primary" href="{{url('updateproductitems',$product->id)}}">Update</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                            </td>


                        </tr>
                        @endforeach





                    </table>


            </div>

      </div>
          
    

          <!-- partial -->
        @include('admin.script')
  </body>
</html>