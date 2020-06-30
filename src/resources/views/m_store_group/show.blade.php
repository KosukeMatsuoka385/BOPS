
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">m_store_group {{ $m_store_group->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("m_store_group") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("m_store_group") ."/". $m_store_group->id . "/edit" }}" title="Edit m_store_group"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/m_store_group/{{ $m_store_group->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$m_store_group->id}} </td></tr>
										<tr><th>name</th><td>{{$m_store_group->name}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    