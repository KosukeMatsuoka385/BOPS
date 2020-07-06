@extends('layouts.app')
@section('content')

<div class="container" style="padding: 100px 0 140px;">
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
                    <div class="move-store-select"><a href="{{ url('/select_store') }}">店舗選択する</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
