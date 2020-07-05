@extends('layouts.app')
@section('content')

<div class="container" style="padding: 125px 0 140px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ダッシュボード</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインに成功しました！
                    
                    <br><br>
                    <div><a href="{{ url('/') }}">メインページに戻る</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
