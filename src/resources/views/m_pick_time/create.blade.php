
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            {{-- <div class="panel-heading">Create New m_pick_time</div> --}}
                            <div class="product-price">Create New m_pick_time</div>
                            <div class="panel-body">
                                <a href="{{ url("/m_pick_time") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif


                                <form method="POST" action="/m_pick_time/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="time" class="col-md-4 control-label">time: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="time" type="text" id="time" value="{{old('time')}}">
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
