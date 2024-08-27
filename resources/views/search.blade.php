<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Search</title>
    @include('layout')
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Customer Information Table</h1>
        
        <form action="{{ route('search') }}" class="d-flex justify-content-end" method="POST">
          @csrf
          <div class="mb-3 d-flex col-3">
              <input type="text" class="form-control me-1" name="query" id="exampleInputText" placeholder="email, order number, item name" value="{{ request()->input('query') }}">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>


        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Orders</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($customers as $customer)
                      <tr>
                          <th scope="row" class="text-center">{{$customer->id}}</th>
                          <td>{{$customer->name}}</td>
                          <td>{{$customer->email}}</td>
                          <td>{{$customer->city}}</td>
                          <td>
                            <ul>
                            @foreach($customer->orders as $order)
                              <li>
                                Order Number: {{ $order->order_number }}
                                <ul>
                                    @foreach($order->items as $item)
                                        <li>Item Name: {{ $item->name }}</li>
                                    @endforeach
                                </ul>
                              </li>
                            @endforeach
                            </ul>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
    </div>
</body>
</html>
