
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">item {{ $item->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("item") ."/". $item->id . "/edit" }}" title="Edit item"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/item/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$item->id}} </td></tr>
										<tr><th>name</th><td>{{$item->name}} </td></tr>
										<tr><th>category_id</th><td>{{$item->category_id}} </td></tr>
										<tr><th>cost</th><td>{{$item->cost}} </td></tr>
										<tr><th>price</th><td>{{$item->price}} </td></tr>
										<tr><th>stock</th><td>{{$item->stock}} </td></tr>
										<tr><th>description</th><td>{{$item->description}} </td></tr>
										<tr><th>image</th><td>{{$item->image}} </td></tr>
										<tr><th>store_id</th><td>{{$item->store_id}} </td></tr>
										<tr><th>is_addone</th><td>{{$item->is_addone}} </td></tr>
										<tr><th>name</th><td>{{$item->name}} </td></tr>
										<tr><th>image</th><td>{{$item->image}} </td></tr>
										<tr><th>name</th><td>{{$item->name}} </td></tr>
										<tr><th>store_group_id</th><td>{{$item->store_group_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    