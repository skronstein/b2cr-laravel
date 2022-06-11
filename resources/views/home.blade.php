@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <h1>Burnout 2 Cheat Rankings</h1>
            This site lists the best times and scores done in Burnout 2: Point of Impact using the "Super Acceleration" and "Disable Speed Restriction" cheat codes.<br>
            Click on a track icon above to view records for that track.
            <hr>
            <section id="services" class="clear">
                <a href="setup">
                    <article>
                        <table>
                            <td class="iconcell">
                                <img src="images/settings-3-icon.png" alt="">
                            </td>
                            <td class="article-text">
                                <h2>Setup</h2>
                                <p>How to set up and use the cheat codes in Dolphin, the GameCube emulator.</p>
                                <footer class="more">Read More &raquo;</footer>
                            </td>
                        </table>
                    </article>
                </a>
                <a href="info">
                    <article>
                        <table>
                            <td class="iconcell">
                                <img src="images/info-icon.png" alt="">
                            </td>
                            <td class="article-text">
                                <h2>Info</h2>
                                <p>Driving tips, best cars, and explanation of Race Crash Total and Big Crash.</p>
                                <footer class="more">Read More &raquo;</footer>
                            </td>
                        </table>
                    </article>
                </a>
                <a href="contact">
                    <article>
                        <table>
                            <td class="iconcell">
                                <img src="images/email-2-icon.png" alt="">
                            </td>
                            <td class="article-text">
                                <h2>Contact</h2>
                                <p>Rules and instructions for submitting records.</p>
                                <footer class="more">Read More &raquo;</footer>
                            </td>
                        </table>
                    </article>
                </a>
            </section>
        </div>
    </div>
@endsection