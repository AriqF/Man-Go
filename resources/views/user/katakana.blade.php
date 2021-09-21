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
                        <h3>Katakana</h3>
                        <hr>
                        <p>
                            Berbeda dengan Hiragana, Katakana digunakan untuk menuliskan nama tempat yang tidak memiliki Kanji, nama orang asing, kata singkatan, .
                        </p> 
                    </div>
                    <div class="box-container">
                        <h3>Tips</h3>
                        <p>
                            Pada penulisan Hiragana dan Katakana sangat umum terdapat huruf yang lebih kecil daripada yang ditulis. Hal ini memicu beberapa kondisi tertentu: <br>
                            Jika terdapat つ kecil artinya, huruf setelahnya dibaca double. Sebagai contoh: カーペット akan dibaca Kāpetto. <br>
                            Namun jika terdapat huruf selain つ (tsu), seperti よ (yo), や (ya), dan ゆ（ゆ）maka huruf sebelumnya akan dibaca mati dan menyambung ke huruf setelahnya. <br>
                            Agar paham, coba perhatikan contoh berikut:
                            <ul>
                                <li>ミャ = Mya</li>
                                <li>キャ = Kya</li>
                                <li>リョ = Ryo</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="box-container">
                        <h3>Tabel Katakana</h3>
                        <div class="row">
                            <table class="table-sm">
                                <tbody>
                                    <tr>
                                        <table class="table-sm mx-auto fadeInRight" class="kana-table">    <!--left side table-->
                                            <tbody> 
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/a.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/i.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/u.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/e.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/o.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ka.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ki.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ku.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ke.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ko.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/sa.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/shi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/su.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/se.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/so.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ta.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/chi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/tsu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/te.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/to.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ha.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/hi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/fu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/he.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ho.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/na.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ni.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/nu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ne.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/no.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ma.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/mi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/mu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/me.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/mo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ra.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ri.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ru.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/re.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ro.png')}}"></td>
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
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ga.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/gi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/gu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ge.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/go.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/za.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ji.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/zu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ze.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/zo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/da.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/di.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/dzu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/de.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/do.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ba.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/bi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/bu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/be.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/bo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/pa.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/pi.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/pu.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/pe.png')}}"></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/po.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/ya.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/yu.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/yo.png')}}"></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/wa.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/n.png')}}"></td>
                                                    <td></td>
                                                    <td><img class="img-fluid" src="{{asset('img/kata/wo.png')}}"></td>
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