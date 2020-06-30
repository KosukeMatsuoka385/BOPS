
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit order_detail #{{ $order_detail->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("order_detail") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/order_detail/{{ $order_detail->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$order_detail->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="order_id" class="col-md-4 control-label">order_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="order_id" type="text" id="order_id" value="{{$order_detail->order_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="item_id" class="col-md-4 control-label">item_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="item_id" type="text" id="item_id" value="{{$order_detail->item_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="qty" class="col-md-4 control-label">qty: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="qty" type="text" id="qty" value="{{$order_detail->qty}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    