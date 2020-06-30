
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">recommend_item</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("recommend_item/create") }}" class="btn btn-success btn-sm" title="Add New recommend_item">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("recommend_item") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>pop_image</th><th>item_id</th><th>name</th><th>category_id</th><th>cost</th><th>price</th><th>stock</th><th>description</th><th>image</th><th>store_id</th><th>is_addone</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($recommend_item as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->pop_image}} </td>

                                            <td>{{ $item->item_id}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->category_id}} </td>

                                                    <td>{{ $item->cost}} </td>

                                                    <td>{{ $item->price}} </td>

                                                    <td>{{ $item->stock}} </td>

                                                    <td>{{ $item->description}} </td>

                                                    <td>{{ $item->image}} </td>

                                                    <td>{{ $item->store_id}} </td>

                                                    <td>{{ $item->is_addone}} </td>
  
                                                <td><a href="{{ url("/recommend_item/" . $item->id) }}" title="View recommend_item"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/recommend_item/" . $item->id . "/edit") }}" title="Edit recommend_item"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/recommend_item/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $recommend_item->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    