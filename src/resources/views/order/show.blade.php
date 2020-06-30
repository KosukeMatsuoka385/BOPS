
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">order {{ $order->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("order") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("order") ."/". $order->id . "/edit" }}" title="Edit order"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/order/{{ $order->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$order->id}} </td></tr>
										<tr><th>date</th><td>{{$order->date}} </td></tr>
										<tr><th>subtotal</th><td>{{$order->subtotal}} </td></tr>
										<tr><th>tax</th><td>{{$order->tax}} </td></tr>
										<tr><th>discount</th><td>{{$order->discount}} </td></tr>
										<tr><th>total</th><td>{{$order->total}} </td></tr>
										<tr><th>paid</th><td>{{$order->paid}} </td></tr>
										<tr><th>payment_type</th><td>{{$order->payment_type}} </td></tr>
										<tr><th>status</th><td>{{$order->status}} </td></tr>
										<tr><th>receive_time</th><td>{{$order->receive_time}} </td></tr>
										<tr><th>name</th><td>{{$order->name}} </td></tr>
										<tr><th>email</th><td>{{$order->email}} </td></tr>
										<tr><th>password</th><td>{{$order->password}} </td></tr>
										<tr><th>phone</th><td>{{$order->phone}} </td></tr>
										<tr><th>credit_name</th><td>{{$order->credit_name}} </td></tr>
										<tr><th>credit_number</th><td>{{$order->credit_number}} </td></tr>
										<tr><th>credit_exmonth</th><td>{{$order->credit_exmonth}} </td></tr>
										<tr><th>credit_exyear</th><td>{{$order->credit_exyear}} </td></tr>
										<tr><th>credit_cvv</th><td>{{$order->credit_cvv}} </td></tr>
										<tr><th>time</th><td>{{$order->time}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    