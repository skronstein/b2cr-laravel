@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1>Driving Tips</h1>

            <p>Below about 160mph, holding A without Y will give you the best acceleration. This is the effect of the Super Acceleration cheat.</p>
            <p>Above about 160mph, holding A + Y will allow your car to accelerate beyond 160mph. This is the effect of the Disable Speed Restriction cheat.</p>
            <p>When drifting with a small angle, your car will have better acceleration and top speed than when than driving in a straight line.</p>
            <p>If your car starts to do a wheelie (usually when driving over a bump or hill), hold R (gas). This usually prevents your car from crashing or losing speed/control due to catching air.</p>


            <h1>What are Race Crash Total and Big Crash?</h1>

            <p>Both of these categories only apply to Single Races.</p>
            <p>Race Crash Total is the total damage done to traffic during the race.</p>
            <p>Big Crash is the largest damage from an individual crash during the race.</p>


            <h1>Best cars</h1>
                <li>Oval Racer: Very good acceleration. Best car for racing on most tracks, especially ones with long straight areas. Easier to control and harder to flip than the Japanese Muscle.</li>
                <br>
                <li>Japanese Muscle: Best for racing on tracks with many tight curves, like Sunrise Valley. Average acceleration. Sometimes flips when accelerating over bumps such as sidewalks.</li>
                <br>
                <li>Gangster: Best acceleration of any car when using Disable Speed Restriction, especially past 350mph. However, the tires have less grip than most other cars.</li>
                <br>
                <li>Hotrod: Excellent acceleration, almost as fast as the Gangster. Hard to flip over, even when accelerating over bumps. Very heavy; best car for Race Crash Total and Big Crash.</li>
                <br>


            <h1>Credits</h1>

            <p>The Disable Speed Restriction and Super Acceleration codes are originally from <a href="https://web.archive.org/web/20070225032326/http://arcentral.net/Codes/NTSC/Burnout_2.php">arcentral.net</a>
            <br>
            The <a href="https://crashmode.forumotion.com/t57-motion-blur-removal-ar-code">motion blur removal code</a> was created by me, sparker599.
            <br>
        </div>
    </div>
@endsection