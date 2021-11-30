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
                <div class="col-xl-5 col-md-12">
                    <div class="box-container">
                        <h3>Perkenalan diri (<ruby>自己紹介<rt>じこしょうかい</rt></ruby>)</h3>
                        <hr>
                        <p>
                            Pada materi ini kita akan belajar beberapa kosa kata dan percakapan yang sering digunakan 
                            saat kita berbicara dan berkenalan dengan orang lain.
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
                                <td>こんにちは</td>
                                <td></td>
                                <td>Hai/Halo/Selamat siang</td>
                              </tr>
                              <tr>
                                <td>はじめまして</td>
                                <td></td>
                                <td>Perkenalkan (saat pertama kali bertemu)</td>
                              </tr>
                              <tr>
                                <td>なまえ</td>
                                <td>名前</td>
                                <td>Nama</td>
                              </tr>
                              <tr>
                                <td>わたし</td>
                                <td>私</td>
                                <td>Hai/Halo/Selamat siang</td>
                              </tr>
                              <tr>
                                <td>きました</td>
                                <td>来ました</td>
                                <td>Perkenalkan</td>
                              </tr>
                              <tr>
                                <td>すんでい</td>
                                <td>住んでい</td>
                                <td>Tinggal</td>
                              </tr>
                              <tr>
                                <td>とし</td>
                                <td>年</td>
                                <td>Tahun</td>
                              </tr>
                              <tr>
                                <td>こうこうせい</td>
                                <td>高校生</td>
                                <td>Murid SMA</td>
                              </tr>
                              <tr>
                                <td>こうこう</td>
                                <td>高校</td>
                                <td>SMA</td>
                              </tr>
                              <tr>
                                <td>だいがくせい</td>
                                <td>大学生</td>
                                <td>Mahasiswa</td>
                              </tr>
                              <tr>
                                <td>だいがく</td>
                                <td>大学</td>
                                <td>Universitas</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="col-xl-7 col-md-12">
                    <div class="box-container">
                        <h3>Memperkenalkan Diri</h3>
                        <hr>
                        <p class="dialogue-jp">
                            エリカ：こんにちは。はじめまして、<ruby>私<rt>わたし</rt></ruby> の<ruby>名前<rt>なまえ</rt></ruby>はエリカです。どうぞよろしくおねがいします
                        </p>
                        <span class="dialogue-id">Erika: Hai, perkenalkan nama saya Erika. Senang bertemu dengan anda.</span>
                        <p class="dialogue-jp">
                            かじ：こんにちは。はじめましてかじひできです。こちらこそよろしくおねがいします。エリカさんは<ruby>外国人<rt>がいこくじん</rt></ruby>ですか？
                        </p>
                        <span class="dialogue-id">Kaji: Senang bertemu dengan anda juga. Saya Hideki Kaji. Apakah kamu orang luar negeri?</span>
                        <p class="dialogue-jp">
                            エリカ：はい、インドネシアのジャカルタから<ruby>来<rt>き</rt></ruby>ました。
                        </p>
                        <span class="dialogue-id">Erika: Iya, saya datang dari Jakarta, Indonesia</span>
                    </div>

                    <div class="box-container">
                        <h3>Bertanya tempat tinggal</h3>
                        <hr>
                        <p class="dialogue-jp">
                            エリカ：かじさんはどこに住んでいますか？
                        </p>
                        <span class="dialogue-id">Erika: Kaji-san Tinggal dimana?</span>
                        <p class="dialogue-jp">
                            かじ：<ruby>俺<rt>おれ</rt></ruby>はあさくさに<ruby>住<rt>す</rt></ruby>んでいます。エリカさんは？
                        </p>
                        <span class="dialogue-id">Kaji: Saya tinggal di Asakusa. Bagaimana dengan mu?</span>
                        <p class="dialogue-jp">
                            エリカ：<ruby>私<rt>わたし</rt></ruby>は<ruby>埼玉県<rt>さいたまけん</rt></ruby>に<ruby>住<rt>す</rt></ruby>んでいます
                        </p> 
                        <span class="dialogue-id">Erika: Saya tinggal di Prefektur Saitama</span>
                        <p class="dialogue-jp">
                            かじ：けっこう<ruby>遠<rt>とおい</rt></ruby>いですね
                        </p>
                        <span class="dialogue-id">Kaji: Cukup jauh ya</span>
                        <p class="dialogue-jp">
                            エリカ：はい、そうですよ
                        </p>
                        <span class="dialogue-id">Erika: Iya betul itu</span>
                    </div>

                    <div class="box-container">
                        <h3>Bertanya sekolah</h3>
                        <hr>
                        <p class="dialogue-jp">
                            かじ：エリカさんは<ruby>高校生<rt>こうこうせい</rt></ruby>ですか？
                        </p>
                        <span class="dialogue-id">Kaji: Erika-san, apakah kamu murid SMA?</span>
                        <p class="dialogue-jp">
                            エリカ：いいえ。私は<ruby>大学生<rt>だいがくせい</rt></ruby>です
                        </p>
                        <span class="dialogue-id">Erika: Bukan, saya seorang mahasiswa</span>
                        <p class="dialogue-jp">
                            かじ：どの<ruby>大学<rt>だいがく</rt></ruby>ですか？
                        </p> 
                        <span class="dialogue-id">Kaji: Universitas apa?</span>
                        <p class="dialogue-jp">
                            エリカ：<ruby>東京大学<rt>とうきょうだいがく</rt></ruby>です
                        </p>
                        <span class="dialogue-id">Erika: Universitas Tokyo</span>
                        <p class="dialogue-jp">
                            かじ：<ruby>何年<rt>なんせい</rt></ruby>ですか？
                        </p>
                        <span class="dialogue-id">Kaji: Tahun berapa?</span>
                        <p class="dialogue-jp">
                            エリカ：<ruby>大学一年生<rt>だいがくいちねんせい</rt></ruby>です
                        </p>
                        <span class="dialogue-id">Erika: Mahasiswa tahun pertama</span>
                    </div>

                </div>
            </div>
        </div>