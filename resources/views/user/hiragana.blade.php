<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                        <h3>Hiragana</h3>
                        <hr>
                        <p>
                            Hiragana merupakan huruf dasar dalam Bahasa Jepang. Hiragana umumnya digunakan untuk menulis kosa kata asli Jepang yang tidak memiliki huruf Kanji, Kanji yang kurang umum digunakan atau terlalu formal untuk penulisan.
                        </p> 
                    </div>
                    <div class="box-container">
                        <h3>Tips</h3>
                        <p>
                            Pada penulisan Hiragana dan Katakana sangat umum terdapat huruf yang lebih kecil daripada yang ditulis. Hal ini memicu beberapa kondisi tertentu: <br>
                            Jika terdapat つ kecil artinya, huruf setelahnya dibaca double. Sebagai contoh: いったい akan dibaca ittai. <br>
                            Namun jika terdapat huruf selain つ (tsu), seperti よ (yo), や (ya), dan ゆ（ゆ）maka huruf sebelumnya akan dibaca mati dan menyambung ke huruf setelahnya. <br>
                            Agar paham, coba perhatikan contoh berikut:
                            <ul>
                                <li>きょ = Kyo</li>
                                <li>にゃ = Nya</li>
                                <li>ひゃ = Hya</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="box-container">
                        <h3>Tabel Hiragana</h3>
                        <div class="row">
                            <table class="table-sm">
                                <tbody>
                                    <tr>
                                        <table class="table-sm mx-auto fadeInRight" class="kana-table">    <!--left side table-->
                                            <tbody> 
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/a.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/i.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/u.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/e.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/o.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ka.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ki.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ku.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ke.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ko.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/sa.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/shi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/su.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/se.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/so.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ta.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/chi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/tsu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/te.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/to.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ha.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/hi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/fu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/he.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ho.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/na.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ni.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/nu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ne.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/no.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ma.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/mi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/mu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/me.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/mo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ra.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ri.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ru.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/re.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ro.png')}}"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </tr>
                                    <tr class="spacer">                        
                                    </tr>
                                    <tr>  
                                        <table class="table-sm mx-auto fadeInLeft">    <!--Right side table-->
                                            <tbody>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ga.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/gi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/gu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ge.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/go.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/za.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ji.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/zu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ze.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/zo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/da.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/cji.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/dzu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/de.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/do.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ba.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/bi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/bu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/be.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/bo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/pa.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/pi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/pu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/pe.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/po.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/ya.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/yu.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/yo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/wa.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/n.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/hira/wo.png')}}"></td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </tr>
                                </tbody>
                         </table>              
                        </div> 
                    </div>

                </div>
            </div>
        </div>