
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New m_store</div>
                            <div class="panel-body">
                                <a href="{{ url("/m_store") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/m_store/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="name" class="col-md-4 control-label">name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="name" type="text" id="name" value="{{old('name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="store_group_id" class="col-md-4 control-label">store_group_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="store_group_id" type="text" id="store_group_id" value="{{old('store_group_id')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    