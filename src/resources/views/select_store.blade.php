﻿@extends("layouts.app")
@section("content")
<br><br>

	<div class="main-title-tt">
		<div class="main-title-left" style='padding:20px 0 0 10px'>
			<span>店舗を選んでください</span>
		</div>
	</div>

	<p style='padding-left: 10px'>< 選択店舗一覧 ></p>
	<div class="accordion" id="accordionExample">

        <div class="card">
            <form action="{{url('pick_time_table') }}" method="post" name="b">
                {{(csrf_field())}}
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ライフエクストラ 東五反田店　
                        <input type="hidden" name="store_name" value="ライフエクストラ 東五反田店">
						<input type="hidden" name="store_address" value="東京都品川区東五反田2丁目19−6">
						<input type="hidden" name="store_phone" value="0354208851">
                        <input type="hidden" name="store_id" value="1">
                        <a href="https://goo.gl/maps/piMmgDQFpX51TxCh7" class="btn btn-outline-info" target="_blank">MAP</a>
                    </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card" style="width: 100%;">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="https://www.img-asp.jp/spot/2144768_1_418_276_3.jpg?t=1547949404" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg> --}}
                            <img src="http://www.img-asp.jp/spot/2957276_1_418_276_3.jpg?t=1510724556" alt="ストア画像" srcset="">
                            {{-- <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div> --}}
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">【住所】 東京都品川区東五反田2丁目19−6</li>
                                <li class="list-group-item">【営業時間】 9：30～24：00</li>
                            </ul>
                            <div class="card-body text-right">
                                {{-- <a href="#" class="card-link">Card link</a> --}}
                                <button type="submit" class="btn btn-primary hover-btn">選択する</button>
                            </div>
                        </div>
                    </div>
                </form>
			</div>

        <div class="card">
            <form action="{{url('pick_time_table') }}" method="post" name="a">
                {{(csrf_field())}}
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						成城石井 アトレ五反田1店　
						{{-- どの店舗選んでも成城石井が飛ぶ --}}
						<input type="hidden" name="store_name" value="成城石井 アトレ五反田1店">
						<input type="hidden" name="store_address" value="東京都品川区東五反田1丁目26−14">
						<input type="hidden" name="store_phone" value="0357596750">
                        <input type="hidden" name="store_id" value="2">
                        <a href="https://goo.gl/maps/KJVQ4nV5Wfhv6zoZ8" class="btn btn-outline-info" target="_blank">MAP</a>
                    </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card" style="width: 96%; height=40rem;">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="https://www.img-asp.jp/spot/2144768_1_418_276_3.jpg?t=1547949404" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg> --}}
                            <img src="https://town.mec-h.com/mh-shirokanedai/wp-content/uploads/2012/10/101345_20-01higashigotanda.jpg" alt="ストア画像" srcset="">
                            {{-- <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div> --}}
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">【住所】 東京都品川区東五反田1丁目26−14</li>
								<li class="list-group-item">【営業時間】 7：00～23：00(土日 ~22:00)</li>
                            </ul>
                            <div class="card-body text-right">
                                {{-- <a href="#" class="card-link">Card link</a> --}}
                                <button type="submit" class="btn btn-primary hover-btn">選択する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="card">
            <form action="{{url('pick_time_table') }}" method="post" name="b">
			{{(csrf_field())}}
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        東急ストア　五反田店　
                        <input type="hidden" name="store_name" value="東急ストア　五反田店">
						<input type="hidden" name="store_address" value="東京都品川区東五反田2-1-2">
						<input type="hidden" name="store_phone" value="0334470109">
                        <input type="hidden" name="store_id" value="3">
                        <a href="https://goo.gl/maps/Y3Kx3YDavC72" class="btn btn-outline-info" target="_blank">MAP</a>
                    </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card" style="width: 100%;">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="https://www.img-asp.jp/spot/2144768_1_418_276_3.jpg?t=1547949404" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg> --}}
                            <img src="https://www.img-asp.jp/spot/2144768_1_418_276_3.jpg?t=1547949404" alt="ストア画像" srcset="">
                            {{-- <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div> --}}
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">【住所】 東京都品川区東五反田2-1-2</li>
                                <li class="list-group-item">【営業時間】 9：00～25：00</li>
                            </ul>
                            <div class="card-body text-right">
                                {{-- <a href="#" class="card-link">Card link</a> --}}
                                <button type="submit" class="btn btn-primary hover-btn">選択する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

	</div>
	@endsection
