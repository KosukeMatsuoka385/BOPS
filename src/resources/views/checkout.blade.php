@extends("layouts.app")
@section("content")

	<!-- Body Start -->
	<div class="wrapper">
		<div class="gambo-Breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Checkout</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	<form method="POST" action="{{url('/orderplaced')}}">
	@csrf
		<div class="all-product-grid">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-7">
						<div id="checkout_wizard" class="checkout accordion left-chck145">
							<div class="checkout-step">
								<div class="checkout-card" id="headingOne"> 
									<span class="checkout-step-number">1</span>
									<h4 class="checkout-step-title"> 
										<button class="wizard-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 電話番号確認</button>
									</h4>
								</div>
								
								<div id="collapseOne" class="collapse in show" data-parent="#checkout_wizard">
									<div class="checkout-step-body">
										<p>お客様の電話番号（遅延などの際に連絡させて頂くことがあります）</p>	
															<div class="login-phone">
																<input type="text" class="form-control" placeholder="Phone Number" name="phone" value="">
															</div>
										<div class="otp-verifaction">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group mb-0">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="checkout-step">
								<div class="checkout-card" id="headingTwo">
									<span class="checkout-step-number">2</span>
									<h4 class="checkout-step-title">
										<button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 受け取り店舗</button>
									</h4>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard">
									<div class="checkout-step-body">
										<div class="checout-address-step">
											<div class="row">
												<div class="col-lg-12">												
													
														<div class="address-fieldset">
															<div class="row">
																<div class="col-lg-6 col-md-12">
																	
																		<label class="control-label">店舗名：</label>
																		<!-- <input id="name" name="" type="text" placeholder="Name" class="form-control input-md" required="" name="{{ Session::get('store_name') }}"> -->
																		{{ Session::get('store_name') }}
																</div>
																<div class="col-lg-6 col-md-12">
																	
																		<label class="control-label">住所：</label>
																		<!-- <input id="email" name="email" type="text" placeholder="Address" class="form-control input-md" required="" name="{{ Session::get('store_address') }}"> -->
																		{{ Session::get('store_address') }}
																</div>
																
															</div>
														</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="checkout-step">
								<div class="checkout-card" id="headingThree"> 
									<span class="checkout-step-number">3</span>
									<h4 class="checkout-step-title">
										<button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 受け取り時間 </button>
									</h4>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#checkout_wizard">
									<div class="checkout-step-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
																	
																		<!-- <input id="pick_time" name="{{ Session::get('pick_time') }}" type="text" placeholder="Time" class="form-control input-md" required=""> -->
																		{{ Session::get('pick_time') }}
													<div class="time-radio">
														<div class="ui form">
															<div class="grouped fields">
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="checkout-step">
								<div class="checkout-card" id="headingFour">
									<span class="checkout-step-number">4</span>
									<h4 class="checkout-step-title"> 
										<button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">支払い情報</button>
									</h4>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#checkout_wizard">
									<div class="checkout-step-body">
										<div class="payment_method-checkout">	
											<div class="row">	
												<div class="col-md-12">
													<div class="rpt100">													
														<ul class="radio--group-inline-container_1">
															<li>
																<div class="radio-item_1">
																	<input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
																	<label for="cashondelivery1" class="radio-label_1">キャッシュレスペイ</label>
																</div>
															</li>
															<li>
																<div class="radio-item_1">
																	<input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
																	<label  for="card1" class="radio-label_1">クレジットカード</label>
																</div>
															</li>
														</ul>
													</div>
													<div class="form-group return-departure-dts" data-method="cashondelivery">															
														<div class="row">
															<div class="col-lg-12">
																<div class="pymnt_title">
																	<h4>キャッシュレスペイ</h4>
																	<p>PayPayとLinePayがご利用になれます</p>
																</div>
															</div>														
														</div>
													</div>
													<div class="form-group return-departure-dts" data-method="card">															
														<div class="row">
															<div class="col-lg-12">
																<div class="pymnt_title mb-4">
																	<h4>クレジットカード</h4>
																</div>
															</div>														
															<div class="col-lg-6">
																<div class="form-group mt-1">
																	<label class="control-label">名前*</label>
																	<div class="ui search focus">
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="credit_name" value="" id="holder[name]" maxlength="64" placeholder="Holder Name">															
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group mt-1">
																	<label class="control-label">カード番号*</label>
																	<div class="ui search focus">
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="credit_number" value="" id="card[number]"  maxlength="64" placeholder="Card Number">															
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group mt-1">																	
																	<label class="control-label">有効期限月*</label>
																	<div class="ui search focus">
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="credit_exmonth" maxlength="2" placeholder="Year" value="">															
																		</div>
																	</div>
																	<!-- <select class="ui fluid search dropdown form-dropdown" name="credit_exmonth">
																		<option value="">Month</option>
																		<option value="1">January</option>
																		<option value="2">February</option>
																		<option value="3">March</option>
																		<option value="4">April</option>
																		<option value="5">May</option>
																		<option value="6">June</option>
																		<option value="7">July</option>
																		<option value="8">August</option>
																		<option value="9">September</option>
																		<option value="10">October</option>
																		<option value="11">November</option>
																		<option value="12">December</option>
																	  </select>	 -->
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group mt-1">
																	<label class="control-label">有効期限年*</label>
																	<div class="ui search focus">
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="credit_exyear" maxlength="4" placeholder="Year" value="">															
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group mt-1">
																	<label class="control-label">CVV*</label>
																	<div class="ui search focus">
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" name="credit_cvv" maxlength="3" placeholder="CVV" value="">															
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<button class="next-btn16 hover-btn" type="submit">注文を確定</button>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="pdpt-bg mt-0">
							
							<div class="main-total-cart">
								<h2>合計金額</h2>
								<span>{{ Session::get('total') }}円</span>
							</div>
                        </div>	
					</div>
				</div>
			</div>
		</div>
		</form>	
	</div>
	<!-- Body End -->
	
@endsection    