
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">replace_item {{ $replace_item->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("replace_item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("replace_item") ."/". $replace_item->id . "/edit" }}" title="Edit replace_item"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/replace_item/{{ $replace_item->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$replace_item->id}} </td></tr>
										<tr><th>reason</th><td>{{$replace_item->reason}} </td></tr>
										<tr><th>product_id1</th><td>{{$replace_item->product_id1}} </td></tr>
										<tr><th>product_id2</th><td>{{$replace_item->product_id2}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    