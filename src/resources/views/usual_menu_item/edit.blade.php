
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit usual_menu_item #{{ $usual_menu_item->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("usual_menu_item") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/usual_menu_item/{{ $usual_menu_item->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$usual_menu_item->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="usual_menu_id" class="col-md-4 control-label">usual_menu_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="usual_menu_id" type="text" id="usual_menu_id" value="{{$usual_menu_item->usual_menu_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="item_id" class="col-md-4 control-label">item_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="item_id" type="text" id="item_id" value="{{$usual_menu_item->item_id}}">
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
    