
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">order_detail {{ $order_detail->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("order_detail") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("order_detail") ."/". $order_detail->id . "/edit" }}" title="Edit order_detail"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/order_detail/{{ $order_detail->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$order_detail->id}} </td></tr>
										<tr><th>order_id</th><td>{{$order_detail->order_id}} </td></tr>
										<tr><th>item_id</th><td>{{$order_detail->item_id}} </td></tr>
										<tr><th>qty</th><td>{{$order_detail->qty}} </td></tr>
										<tr><th>date</th><td>{{$order_detail->date}} </td></tr>
										<tr><th>subtotal</th><td>{{$order_detail->subtotal}} </td></tr>
										<tr><th>tax</th><td>{{$order_detail->tax}} </td></tr>
										<tr><th>discount</th><td>{{$order_detail->discount}} </td></tr>
										<tr><th>total</th><td>{{$order_detail->total}} </td></tr>
										<tr><th>paid</th><td>{{$order_detail->paid}} </td></tr>
										<tr><th>payment_type</th><td>{{$order_detail->payment_type}} </td></tr>
										<tr><th>status</th><td>{{$order_detail->status}} </td></tr>
										<tr><th>receive_time</th><td>{{$order_detail->receive_time}} </td></tr>
										<tr><th>name</th><td>{{$order_detail->name}} </td></tr>
										<tr><th>category_id</th><td>{{$order_detail->category_id}} </td></tr>
										<tr><th>cost</th><td>{{$order_detail->cost}} </td></tr>
										<tr><th>price</th><td>{{$order_detail->price}} </td></tr>
										<tr><th>stock</th><td>{{$order_detail->stock}} </td></tr>
										<tr><th>description</th><td>{{$order_detail->description}} </td></tr>
										<tr><th>image</th><td>{{$order_detail->image}} </td></tr>
										<tr><th>store_id</th><td>{{$order_detail->store_id}} </td></tr>
										<tr><th>is_addone</th><td>{{$order_detail->is_addone}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    