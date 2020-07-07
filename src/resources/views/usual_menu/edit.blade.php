
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit usual_menu #{{ $usual_menu->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("usual_menu") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/usual_menu/{{ $usual_menu->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$usual_menu->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="name" class="col-md-4 control-label">name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="name" type="text" id="name" value="{{$usual_menu->name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="img" class="col-md-4 control-label">img: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="img" type="text" id="img" value="{{$usual_menu->img}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{$usual_menu->user_id}}">
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
    