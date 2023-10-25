<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')
    
  </head>
  <body>

    @include('admin.sidebar')

    @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class ="container" align ="center">
            @if(session()->has('message'))
            
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}
            </div>  

            @endif
                <table>
                    <tr style="background-color: grey;">

                        <td style="padding:20px;">Customer Name</td>
                        <td style="padding:20px;">Phone</td>
                        <td style="padding:20px;">Address</td>
                        <td style="padding:20px;">Product Name</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Quantity</td>
                        <td style="padding:20px;">Status</td>
                        <td style="padding:20px;">Action</td>

                    </tr>

                    @foreach($order as $orders)

                    <tr align="center">

                        <td style="padding:20px;">{{$orders->name}}</td>
                        <td style="padding:20px;">{{$orders->phone}}</td>
                        <td style="padding:20px;">{{$orders->address}}</td>
                        <td style="padding:20px;">{{$orders->product_name}}</td>
                        <td style="padding:20px;">{{$orders->price}}</td>
                        <td style="padding:20px;">{{$orders->quantity}}</td>
                        <td style="padding:20px;">{{$orders->status}}</td>
                        @if($orders->status == 'Order Shipped')
                          <td style="padding:20px;"><a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">Update as Delivered</a></td>
                        @elseif($orders->status == 'Order Cancelled')
                        <td style="padding:20px;"><a class="btn btn-warning" href="">Order Cancelled by User</a></td>
                        @elseif($orders->status == 'Order Placed')
                        <td style="padding:20px;"><a class="btn btn-primary" href="{{url('shiporder', $orders->id)}}">Ship Order</a></td>
                        @else
                          <td style="padding:20px;"><a class="btn btn-danger" href="">Already Delivered</a></td>
                        @endif
                    </tr>

                    @endforeach
                </table>

            </div>
        </div>
          <!-- partial -->
        @include('admin.script')

  </body>
</html>