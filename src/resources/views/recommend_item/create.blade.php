
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New recommend_item</div>
                            <div class="panel-body">
                                <a href="{{ url("/recommend_item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/recommend_item/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="pop_image" class="col-md-4 control-label">pop_image: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="pop_image" type="text" id="pop_image" value="{{old('pop_image')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="item_id" class="col-md-4 control-label">item_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="item_id" type="text" id="item_id" value="{{old('item_id')}}">
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
    