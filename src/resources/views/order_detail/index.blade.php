
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">order_detail</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("order_detail/create") }}" class="btn btn-success btn-sm" title="Add New order_detail">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("order_detail") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>order_id</th><th>item_id</th><th>qty</th><th>date</th><th>subtotal</th><th>tax</th><th>discount</th><th>total</th><th>paid</th><th>payment_type</th><th>status</th><th>receive_time</th><th>name</th><th>category_id</th><th>cost</th><th>price</th><th>stock</th><th>description</th><th>image</th><th>store_id</th><th>is_addone</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_detail as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->order_id}} </td>

                                            <td>{{ $item->item_id}} </td>

                                            <td>{{ $item->qty}} </td>

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

                                                    <td>{{ $item->category_id}} </td>

                                                    <td>{{ $item->cost}} </td>

                                                    <td>{{ $item->price}} </td>

                                                    <td>{{ $item->stock}} </td>

                                                    <td>{{ $item->description}} </td>

                                                    <td>{{ $item->image}} </td>

                                                    <td>{{ $item->store_id}} </td>

                                                    <td>{{ $item->is_addone}} </td>
  
                                                <td><a href="{{ url("/order_detail/" . $item->id) }}" title="View order_detail"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/order_detail/" . $item->id . "/edit") }}" title="Edit order_detail"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/order_detail/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $order_detail->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    