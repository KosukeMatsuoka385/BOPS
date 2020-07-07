@extends("layouts.app")
@section("content")

    <br>
	<div class="wrapper">
		<div>

			<div class="main-title-left" style="padding-left: 10px">
				<span>来店時刻を選択してください</span>
			</div>

		<div style="padding-left: 2px;">
			<form action="/put_pick_time" method="post">
				{{(csrf_field())}}
				<table>

					<?php
						$time_table = "";
						$start_time = "";

						// サービスが30分先の時間を確保しないといけないので30足して60の余り
                        // $now_minute = (Date('i')+30) % 60;

                        // 現在の分
                        $now_minute0 = Date('i');
                        // echo $now_minute0;
                        // 30分後の分
                        $now_minute = (Date('i')+30) % 60;
                        // echo $now_minute;
						// $now_minute = (Date('i')+20) % 60;
                        $now_hour = Date('H')+9;

						// 数値が60以上になっている時は場合分け
						if ($now_minute > Date('i')) {

                            // 分が１桁の場合
                            if ($now_minute < 10 ) {
                                    $now_minute =sprintf('%02d', $now_minute);
                                    // $now_hour = Date('H')+10;
                                }else{
                                    // $now_hour = Date('H')+9;
                                }


                            // 深夜を回っていたら
                            if ($now_hour >= 24  ) {
                                $now_hour = $now_hour -24;
                                $now_hour =sprintf('%02d', $now_hour);
                            }else{
                                $now_hour = Date('H')+9;
                            }
                            // echo var_dump($now_hour);
                            $now_time = $now_hour.":".$now_minute;

						}else{

							if ($now_minute >= 30) {
                                // $now_hour = Date('H')+1;
								$now_time = $now_hour.":0".$now_minute;
							}else{
								$now_time = $now_hour.":".$now_minute;
							}
						}



// // 数値が60以上になっている時は場合分け
// if ($now_minute > Date('i')) {

// // 分が１桁の場合
// if ($now_minute < 10 ) {
//         $now_minute =sprintf('%02d', $now_minute);
//         $now_hour = Date('H')+10;
//     }else{
//         $now_hour = Date('H')+9;
//     }


// // 深夜を回っていたら
// if ($now_hour >= 24  ) {
//     $now_hour = $now_hour -24;
//     $now_hour =sprintf('%02d', $now_hour);
// }else{
//     $now_hour = Date('H')+9;
// }
// // echo var_dump($now_hour);
// $now_time = $now_hour.":".$now_minute;

// }else{

// if ($now_minute >= 30) {
//     // $now_hour = Date('H')+1;
//     $now_time = $now_hour.":0".$now_minute;
// }else{
//     $now_time = $now_hour.":".$now_minute;
// }
// }



                        // 現在時刻の30分後

						echo "<div style='padding-left: 10px')>選択可能受取時間帯は<br><strong>".$now_time."</strong>の時間帯以降のものとなります</div>";
						echo "<p style='padding-left: 10px'>(例. 現在時刻 14:17 の場合,30分後の14:47は<br>14:45~の時間を過ぎてしまっている為、<br>15:00 以降の時間帯から選択可能となります)</p>";

						for ($hour=10; $hour <= 23 ; $hour++) {
							echo '<tr>';
							for ($min=0; $min <= 45; $min = $min + 15) {

								// 0だと１桁になってしまうので2桁のゼロ(string型)に変換
								if ($min == 0 ) {
									$min =sprintf('%02d', $min);
								}

								// 現在時刻が設定時刻より小さい場合
								// 12 <= 19
								if ($now_hour < $hour) {
										echo '<td class="col-xs-3" style="padding:15px 1px 0 1px;"><div class="btn btn-default btn-outline-success" ><label for="'.$hour.':'.$min.'" >';
										echo '<input type="radio" name="pick_time" value="'.$hour.':'.$min.'" id="'.$hour.':'.$min.'"';
										echo ">";
										echo $hour.':'.$min."~";
										echo '</label></div></td>';
								} else if($now_hour == $hour){
									if ($now_minute <= $min) {
										echo '<td class="col-xs-3" style="padding:15px 1px 0 1px;"><div class="btn btn-default btn-outline-success" ><label for="'.$hour.':'.$min.'">';
										echo '<input type="radio" name="pick_time" value="'.$hour.':'.$min.'" id="'.$hour.':'.$min.'"';
										echo ">";
										echo $hour.':'.$min."~";
										echo '</label></div></td>';
									}
								}
							}
							echo '</tr>'. `\n`;
						}



						//////////////////// 時間の分の部分のfor文 --一応原文で保存 ////////////////////

						// echo '<tr>';
						// for ($min=0; $min <= 45; $min = $min + 15) {
						// 	if ($min !== 0 ) {
						// 		echo '<td class="col-xs-3"><div><label for="10:'.$min.'">';
						// 		// echo $min;
						// 		echo '<input type="radio" name="pick_time" id="10:'.$min.'">';
						// 		// echo $min;
						// 		echo '10:'.$min;
						// 		// echo $min;
						// 		echo '</label></div></td>';
						// 	}else {
						// 		echo '<td class="col-xs-3"><div><label for="10:0';
						// 		echo $min;
						// 		echo '"><input type="radio" name="pick_time" id="10:0';
						// 		echo $min;
						// 		echo '">10:0';
						// 		echo $min;
						// 		echo '</label></div></td>';
						// 	}
						// }
						// echo '</tr>'. `\n`;

						//////////////////// 時間の分の部分のfor文 --一応原文で保存 ////////////////////

						// print ($time_table);


						?>

				</table>
				<br><br>
				<div class="card-body text-right">
				<button type="submit" href="{{ url('menus') }}" class="btn btn-primary" style="padding: 10px 20px;">選択する</button>
				</div>
			</form>

		</div>
	</div>
	@endsection
