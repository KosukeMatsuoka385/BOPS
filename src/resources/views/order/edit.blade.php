
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit order #{{ $order->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("order") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/order/{{ $order->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$order->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="date" class="col-md-4 control-label">date: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="date" type="date" id="date" value="{{$order->date}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="subtotal" class="col-md-4 control-label">subtotal: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="subtotal" type="text" id="subtotal" value="{{$order->subtotal}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="tax" class="col-md-4 control-label">tax: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="tax" type="text" id="tax" value="{{$order->tax}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="discount" class="col-md-4 control-label">discount: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="discount" type="text" id="discount" value="{{$order->discount}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="total" class="col-md-4 control-label">total: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="total" type="text" id="total" value="{{$order->total}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="paid" class="col-md-4 control-label">paid: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="paid" type="text" id="paid" value="{{$order->paid}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="payment_type" class="col-md-4 control-label">payment_type: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="payment_type" type="text" id="payment_type" value="{{$order->payment_type}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="status" class="col-md-4 control-label">status: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="status" type="text" id="status" value="{{$order->status}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="receive_time" class="col-md-4 control-label">receive_time: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="receive_time" type="date" id="receive_time" value="{{$order->receive_time}}">
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
    