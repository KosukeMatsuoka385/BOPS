
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">usual_menu_item {{ $usual_menu_item->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("usual_menu_item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("usual_menu_item") ."/". $usual_menu_item->id . "/edit" }}" title="Edit usual_menu_item"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/usual_menu_item/{{ $usual_menu_item->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$usual_menu_item->id}} </td></tr>
										<tr><th>usual_menu_id</th><td>{{$usual_menu_item->usual_menu_id}} </td></tr>
										<tr><th>item_id</th><td>{{$usual_menu_item->item_id}} </td></tr>
										<tr><th>name</th><td>{{$usual_menu_item->name}} </td></tr>
										<tr><th>image</th><td>{{$usual_menu_item->image}} </td></tr>
										<tr><th>user_id</th><td>{{$usual_menu_item->user_id}} </td></tr>
										<tr><th>name</th><td>{{$usual_menu_item->name}} </td></tr>
										<tr><th>category_id</th><td>{{$usual_menu_item->category_id}} </td></tr>
										<tr><th>cost</th><td>{{$usual_menu_item->cost}} </td></tr>
										<tr><th>price</th><td>{{$usual_menu_item->price}} </td></tr>
										<tr><th>stock</th><td>{{$usual_menu_item->stock}} </td></tr>
										<tr><th>description</th><td>{{$usual_menu_item->description}} </td></tr>
										<tr><th>image</th><td>{{$usual_menu_item->image}} </td></tr>
										<tr><th>store_id</th><td>{{$usual_menu_item->store_id}} </td></tr>
										<tr><th>is_addone</th><td>{{$usual_menu_item->is_addone}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    