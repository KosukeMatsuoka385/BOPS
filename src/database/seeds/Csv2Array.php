<?php

    // echo 'test';
    class Csv2Array
    {

        public function convert($filename)
        {
            // ファイルの中身を配列で取得.
            $csv = file($filename);

            // ヘッダーを切り取る.
            $csv_header = array_map('trim', explode(',', $csv[0]));
            $csv_body = array_splice($csv, 1);

            // 各行を配列に直す.
            foreach ($csv_body as $index1 => $row) {
                $cells = explode(',', $row);
                foreach ($cells as $index2 => $cell) {
                    // explodeしたときの謎のスペースが発生するからtrim 多分改行コードが行けない
                    $table[$index1][$csv_header[$index2]] = trim($cell);
                }
            }

            return $table;
        }
    }

    // 使い方
    // $csv2Array = new Csv2Array;
    // var_dump($csv2Array->convert('usual_menus.csv'));
