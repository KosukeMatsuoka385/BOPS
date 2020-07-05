
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
                                        <label for="address" class="col-md-4 control-label">address: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="address" type="text" id="address" value="{{old('address')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="tel" class="col-md-4 control-label">tel: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="tel" type="text" id="tel" value="{{old('tel')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="open_time" class="col-md-4 control-label">open_time: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="open_time" type="text" id="open_time" value="{{old('open_time')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="close_time" class="col-md-4 control-label">close_time: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="close_time" type="text" id="close_time" value="{{old('close_time')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="appearance_img" class="col-md-4 control-label">appearance_img: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="appearance_img" type="text" id="appearance_img" value="{{old('appearance_img')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="store_url" class="col-md-4 control-label">store_url: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="store_url" type="text" id="store_url" value="{{old('store_url')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="map_url" class="col-md-4 control-label">map_url: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="map_url" type="text" id="map_url" value="{{old('map_url')}}">
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
    