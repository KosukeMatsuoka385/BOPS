
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">m_store {{ $m_store->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("m_store") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("m_store") ."/". $m_store->id . "/edit" }}" title="Edit m_store"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/m_store/{{ $m_store->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$m_store->id}} </td></tr>
										<tr><th>name</th><td>{{$m_store->name}} </td></tr>
										<tr><th>store_group_id</th><td>{{$m_store->store_group_id}} </td></tr>
										<tr><th>name</th><td>{{$m_store->name}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    