
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New replace_item</div>
                            <div class="panel-body">
                                <a href="{{ url("/replace_item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/replace_item/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="reason" class="col-md-4 control-label">reason: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="reason" type="text" id="reason" value="{{old('reason')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="product_id1" class="col-md-4 control-label">product_id1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="product_id1" type="text" id="product_id1" value="{{old('product_id1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="product_id2" class="col-md-4 control-label">product_id2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="product_id2" type="text" id="product_id2" value="{{old('product_id2')}}">
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
    