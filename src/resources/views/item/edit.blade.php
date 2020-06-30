
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit item #{{ $item->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/item/{{ $item->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$item->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="name" class="col-md-4 control-label">name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="name" type="text" id="name" value="{{$item->name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="category_id" class="col-md-4 control-label">category_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="category_id" type="text" id="category_id" value="{{$item->category_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="cost" class="col-md-4 control-label">cost: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="cost" type="text" id="cost" value="{{$item->cost}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="price" class="col-md-4 control-label">price: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="price" type="text" id="price" value="{{$item->price}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="stock" class="col-md-4 control-label">stock: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="stock" type="text" id="stock" value="{{$item->stock}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="description" class="col-md-4 control-label">description: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="description" type="text" id="description" value="{{$item->description}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image" class="col-md-4 control-label">image: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="image" type="text" id="image" value="{{$item->image}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="store_id" class="col-md-4 control-label">store_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="store_id" type="text" id="store_id" value="{{$item->store_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="is_addone" class="col-md-4 control-label">is_addone: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="is_addone" type="text" id="is_addone" value="{{$item->is_addone}}">
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
    