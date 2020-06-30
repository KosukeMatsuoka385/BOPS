
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">user</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("user/create") }}" class="btn btn-success btn-sm" title="Add New user">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("user") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>name</th><th>email</th><th>password</th><th>phone</th><th>credit_name</th><th>credit_number</th><th>credit_exmonth</th><th>credit_exyear</th><th>credit_cvv</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->name}} </td>

                                            <td>{{ $item->email}} </td>

                                            <td>{{ $item->password}} </td>

                                            <td>{{ $item->phone}} </td>

                                            <td>{{ $item->credit_name}} </td>

                                            <td>{{ $item->credit_number}} </td>

                                            <td>{{ $item->credit_exmonth}} </td>

                                            <td>{{ $item->credit_exyear}} </td>

                                            <td>{{ $item->credit_cvv}} </td>
  
                                                <td><a href="{{ url("/user/" . $item->id) }}" title="View user"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/user/" . $item->id . "/edit") }}" title="Edit user"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/user/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $user->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    