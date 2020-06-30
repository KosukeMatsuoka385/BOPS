
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">order</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("order/create") }}" class="btn btn-success btn-sm" title="Add New order">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("order") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>date</th><th>subtotal</th><th>tax</th><th>discount</th><th>total</th><th>paid</th><th>payment_type</th><th>status</th><th>receive_time</th><th>name</th><th>email</th><th>password</th><th>phone</th><th>credit_name</th><th>credit_number</th><th>credit_exmonth</th><th>credit_exyear</th><th>credit_cvv</th><th>time</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->date}} </td>

                                            <td>{{ $item->subtotal}} </td>

                                            <td>{{ $item->tax}} </td>

                                            <td>{{ $item->discount}} </td>

                                            <td>{{ $item->total}} </td>

                                            <td>{{ $item->paid}} </td>

                                            <td>{{ $item->payment_type}} </td>

                                            <td>{{ $item->status}} </td>

                                            <td>{{ $item->receive_time}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->email}} </td>

                                                    <td>{{ $item->password}} </td>

                                                    <td>{{ $item->phone}} </td>

                                                    <td>{{ $item->credit_name}} </td>

                                                    <td>{{ $item->credit_number}} </td>

                                                    <td>{{ $item->credit_exmonth}} </td>

                                                    <td>{{ $item->credit_exyear}} </td>

                                                    <td>{{ $item->credit_cvv}} </td>

                                                    <td>{{ $item->time}} </td>
  
                                                <td><a href="{{ url("/order/" . $item->id) }}" title="View order"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/order/" . $item->id . "/edit") }}" title="Edit order"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/order/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $order->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    