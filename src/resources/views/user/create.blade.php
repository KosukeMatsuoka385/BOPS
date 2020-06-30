
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New user</div>
                            <div class="panel-body">
                                <a href="{{ url("/user") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/user/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="name" class="col-md-4 control-label">name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="name" type="text" id="name" value="{{old('name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="email" class="col-md-4 control-label">email: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="email" type="text" id="email" value="{{old('email')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="password" class="col-md-4 control-label">password: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="password" type="text" id="password" value="{{old('password')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="phone" class="col-md-4 control-label">phone: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="phone" type="text" id="phone" value="{{old('phone')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="credit_name" class="col-md-4 control-label">credit_name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="credit_name" type="text" id="credit_name" value="{{old('credit_name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="credit_number" class="col-md-4 control-label">credit_number: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="credit_number" type="text" id="credit_number" value="{{old('credit_number')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="credit_exmonth" class="col-md-4 control-label">credit_exmonth: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="credit_exmonth" type="text" id="credit_exmonth" value="{{old('credit_exmonth')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="credit_exyear" class="col-md-4 control-label">credit_exyear: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="credit_exyear" type="text" id="credit_exyear" value="{{old('credit_exyear')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="credit_cvv" class="col-md-4 control-label">credit_cvv: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="credit_cvv" type="text" id="credit_cvv" value="{{old('credit_cvv')}}">
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
    