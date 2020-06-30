
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">replace_item</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("replace_item/create") }}" class="btn btn-success btn-sm" title="Add New replace_item">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("replace_item") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>reason</th><th>product_id1</th><th>product_id2</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($replace_item as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->reason}} </td>

                                            <td>{{ $item->product_id1}} </td>

                                            <td>{{ $item->product_id2}} </td>
  
                                                <td><a href="{{ url("/replace_item/" . $item->id) }}" title="View replace_item"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/replace_item/" . $item->id . "/edit") }}" title="Edit replace_item"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/replace_item/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $replace_item->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    