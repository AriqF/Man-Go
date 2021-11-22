<!DOCTYPE html>
<html translate="no" lang="ja">
    <head>
        @section('title', 'ManGo - Belajar Bahasa Jepang')
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css"> 
    </head>
    <body style="background-color: #f3f7f7">
        @extends('layouts.user.navLayouts')
        <div class="page-section">
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="box-container">
                        <h3>Makanan (<ruby>食べ物<rt>た　もの</rt></ruby>)</h3>
                        <hr>
                        <p>
                            Pada materi ini kita akan belajar beberapa kosa kata dan percakapan yang sering digunakan 
                            saat ingin makan, memesan makanan, dan lainnya.
                        </p> 
                    </div>
                    <div class="box-container">
                        <h3>Tabel Kosa Kata</h3>
                        <table class="table text-center table-vocab">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ひらがな</th>
                                <th scope="col"><ruby>漢字<rt>かんじ</rt></ruby></th>
                                <th scope="col">Bahasa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>すみません</td>
                                <td></td>
                                <td>Permisi</td>
                              </tr>
                              <tr>
                                <td>つの</td>
                                <td>角</td>
                                <td>Belokan</td>
                              </tr>
                              <tr>
                                <td>みぎ</td>
                                <td>右</td>
                                <td>Kanan</td>
                              </tr>
                              <tr>
                                <td>ひだり</td>
                                <td>左</td>
                                <td>Kiri</td>
                              </tr>
                              <tr>
                                <td>まがり</td>
                                <td>曲がり</td>
                                <td>Belok</td>
                              </tr>
                              <tr>
                                <td>えき</td>
                                <td>駅</td>
                                <td>Stasiun</td>
                              </tr>
                              <tr>
                                <td>おひる</td>
                                <td>お昼</td>
                                <td>Siang/Waktu siang</td>
                              </tr>
                              <tr>
                                <td>ごはん</td>
                                <td>ご飯</td>
                                <td>Nasi</td>
                              </tr>
                              <tr>
                                <td>たべ</td>
                                <td>食べ</td>
                                <td>Makan</td>
                              </tr>
                              <tr>
                                <td>しょくどう</td>
                                <td>食堂</td>
                                <td>Kafetaria</td>
                              </tr>
                              <tr>
                                <td>えいご</td>
                                <td>英語</td>
                                <td>Bahasa Inggris</td>
                              </tr>
                              <tr>
                                <td>ぜんぶ</td>
                                <td>全部</td>
                                <td>Semua</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="box-container">
                        <h3>Bertanya lokasi</h3>
                        <hr>
                        <p class="dialogue-jp">
                            エリカ：すみません　かじさん、このレストランはどちらですか？
                        </p>
                        <span class="dialogue-id">Erika: Permisi Kaji-san, apakah kamu tahu lokasi restoran ini?</span>
                        <p class="dialogue-jp">
                            かじ：あそこの角を左に曲がってこのレストランは駅のそばにあります
                        </p>
                        <span class="dialogue-id">Kaji: Belokkan yang disana nanti belok kiri dan nanti restorannya berada di samping stasiun</span>
                        <p class="dialogue-jp">
                            エリカ：あ、ありがとうございます。
                        </p>
                        <span class="dialogue-id">Erika: Oh, terima kasih banyak</span>
                        <p class="dialogue-jp">
                            かじ：レストランでお昼おご飯を食べますか？
                        </p>
                        <span class="dialogue-id">Kaji: Apakah kamu berencana untuk makan siang disana?</span>
                        <p class="dialogue-jp">
                            エリカ：はい。かじさんもですか？
                        </p>
                        <span class="dialogue-id">Erika: Iya, apakah Kaji-san juga?</span>
                        <p class="dialogue-jp">
                            かじ：いいえ。俺は食堂でご飯を食べました。
                        </p>
                        <span class="dialogue-id">Kaji: Tidak, saya sudah makan di cafetaria tadi</span>
                    </div>

                    <div class="box-container">
                        <h3>Bertanya menu dan memesan makanan</h3>
                        <hr>
                        <p class="dialogue-jp">
                            お姉さん：いらっしゃいませ！
                        </p>
                        <span class="dialogue-id">Waitress: Selamat datang!</span>
                        <p class="dialogue-jp">
                            エリカ：すみません、英語のメニューはありますか？
                        </p>
                        <span class="dialogue-id">Erika: Permisi, apakah ada menu dalam Bahasa Ingrris?</span>
                        <p class="dialogue-jp">
                            お姉さん：これどうぞ
                        </p> 
                        <span class="dialogue-id">Waitress: Silahkan ini dia</span>
                        <p class="dialogue-jp">
                            エリカ：今日はおすすめは何ですか？
                        </p>
                        <span class="dialogue-id">Erika: Hari ini apa rekomendasi menunya?</span>
                        <p class="dialogue-jp">
                            お姉さん：今日のおすすめはみそラーメンです。
                        </p>
                        <span class="dialogue-id">Waitress: Menu rekomendasi hari ini ada miso ramen</span>
                        <p class="dialogue-jp">
                            エリカ：じゃあ、みそラーメンを一つお願いします
                        </p>
                        <span class="dialogue-id">Erika: Kalo begitu, saya pesan miso ramen satu porsi</span>
                        <p class="dialogue-jp">
                            お姉さん：わかりました。しょしょお待ちください。
                        </p>
                        <span class="dialogue-id">Waitress: Baik. Mohon ditunggu ya</span>
                        <p class="dialogue-jp">
                            お姉さん：どうぞみそラーメン
                        </p>
                        <span class="dialogue-id">Waitress: Silahkan miso ramennya</span>
                        <p class="dialogue-jp">
                            エリカ：いただきます。
                        </p>
                        <span class="dialogue-id">Erika: Selamat makan</span>
                    </div>

                    <div class="box-container">
                        <h3>Saat dikasir</h3>
                        <hr>
                        <p class="dialogue-jp">
                            お姉さん：全部で一千八百になります。
                        </p>
                        <span class="dialogue-id">Waitress: Total keseluruhan jadi 1800 Yen</span>
                        <p class="dialogue-jp">
                            エリカ：はい
                        </p>
                        <span class="dialogue-id">Erika: Oke</span>
                        <p class="dialogue-jp">
                            お姉さん：一千八百からでよろしでしょうか?
                        </p>
                        <span class="dialogue-id">Erika: Saya terima uangnya 1800 ya?</span>
                        <p class="dialogue-jp">
                            エリカ：はい
                        </p> 
                        <span class="dialogue-id">Waitress: Iya</span>
                        <p class="dialogue-jp">
                            お姉さん：レシートはよろしいですか
                        </p>
                        <span class="dialogue-id">Waitress: Apakah kamu ingin menyimpan bonnya?</span>
                        <p class="dialogue-jp">
                            エリカ：はい、お願いします　／　いええ、大丈夫です
                        </p>
                        <span class="dialogue-id">Erika: Iya, boleh / Tidak, terima kasih</span>
                    </div>

                </div>
            </div>
        </div>