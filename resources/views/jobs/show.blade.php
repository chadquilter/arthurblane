@extends('layouts.app')

@section('content')
    <div>
    <a href="/jobs" class="btn btn-default">Go Back</a>
    @if($job)
        <h1>{{$job->job_title}}</h1>
        <div>
            <p>
                {!!$job->job_summary!!}
            </p>
            <br>&nbsp
            <p>
                {{$job->job_notes}}
            </p>
            <br>
            <p>
                {{$job->job_status}}
            </p>
            <hr>
            <small>Job Created: {{$job->created_at}} By: {{$job->user->name}}</small>
            <hr>
            @if(!Auth::guest())
              @if(Auth::user()->id == $job->user_id)
                <a href="/jobs/{{$job->job_id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action' => ['JobsController@destroy', $job->job_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}}
                  :<wbr>{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                <br>
              @endif
            @endif
        </div>
    @else
        <div class="alert alert-danger">
            <strong>The Job id used was not found!</strong>
            Please go back to the jobs listing.
        </div>
    @endif
    <br>
    </div>


    <div class="bg">
        <canvas id="fisr" width="467" height="624" style="width: 467px; height: 624px;">
          0:03:29:25
        </canvas>
    </div>
  </body>
  <script>
  var canvas;
  var stage;
  var width = 720;
  var height = 480;
  var particles = [];
  var max = 60;
  var start = new Date(1517551199999);
  var speed = 4;
  var size = 30;
  var mid, fid, d, h, m, s;

  function Particle(x, y, xs, ys) {
    this.x = x;
    this.y = y;
    this.xs = xs;
    this.ys = ys;
    this.life = 0;
  }

  function resizeCanvas() {
    setTimeout(function () {
      width = window.innerWidth;
      height = window.innerHeight;
      mid = width / 2;
      canvas.width = width;
      canvas.height = height;
      canvas.style.width = width + "px";
      canvas.style.height = height + "px";
      stage.globalCompositeOperation = "lighter"
    }, 0);
  }

  function init() {
    canvas = document.getElementById("fisr");
    resizeCanvas();
    if (canvas.getContext) {
      stage = canvas.getContext("2d");
      stage.globalCompositeOperation = "xor";
      window.addEventListener("resize", function () {
        resizeCanvas();
        stage.globalCompositeOperation = "lighter";
      });
      var timer = setInterval(update, 40);
    } else {
      alert("Canvas not supported.");
    }
  }

  function cupdate() {
    stage.save();
    stage.globalCompositeOperation = "multiply";
    stage.font = "40px Monospace";
    stage.fillStyle = "#999999";
    stage.textAlign = "center";
    fid = Math.abs(start - Date.now()) / 1000;
    d = Math.floor(fid / 86400);
    fid -= d * 86400;
    h = Math.floor(fid / 3600) % 24;
    fid -= h * 3600;
    m = Math.floor(fid / 60) % 60;
    fid -= m * 60;
    s = Math.trunc(fid % 60);
    canvas.textContent = d + ':' + (('' + h).length > 1 ? '' : '0') + h + ':' + (('' + m).length > 1 ? '' : '0') + m + ':' + (('' + s).length > 1 ? '' : '0') + s;
    stage.fillText(d + ':' + (('' + h).length > 1 ? '' : '0') + h + ':' + (('' + m).length > 1 ? '' : '0') + m + ':' + (('' + s).length > 1 ? '' : '0') + s, mid, 340);
    stage.restore();
  }

  //Flames
  function update() {
    for (var i = 0; i < 10; i++) {
      //P = MID=1/2 WIDTH, X=520, XS = (RAND * 2 * 4 - 4) / 2, YS = 0 - RAND * 2 * 4
      var p = new Particle(mid, 520, (Math.random() * 2 * speed - speed) / 2, 0 - Math.random() * 2 * speed);
      particles.push(p);
    }
    stage.clearRect(0, 0, width, height);
    for (i = 0; i < particles.length; i++) {
      //set particle transparancy using the life cycle of each partile in array, the older the more opacity
      stage.fillStyle = "rgba(" + (260 - (particles[i].life * 2)) + "," + ((particles[i].life * 2) + 50) + "," + (particles[i].life * 2) + "," + (((max - particles[i].life) / max) * 0.4) + ")";
      //set particle trajectory
      stage.beginPath();
      stage.arc(particles[i].x, particles[i].y, (max - particles[i].life) / max * (size / 2) + (size / 2), 0, 2 * Math.PI);
      stage.fill();
      //double up
      particles[i].x += particles[i].xs;
      particles[i].y += particles[i].ys;
      particles[i].life++;

      if (particles[i].life >= max) {
        particles.splice(i, 1);
        i--;
      }
    }
    cupdate();

    //The circle around the D
    stage.save();
    stage.translate((canvas.width / 2) - 100, 350);
    stage.globalCompositeOperation = "darken";
    stage.strokeStyle = "rgba(0,0,0,0)";
    stage.miterLimit = 4;
    stage.fillStyle = "#0171D0";
    stage.beginPath();
    stage.moveTo(0, 100);
    stage.bezierCurveTo(0, 155.2, 44.8, 200, 100, 200);
    stage.bezierCurveTo(155.2, 200, 200, 155.2, 200, 100);
    stage.bezierCurveTo(200, 44.80000000000001, 155.2, 0, 100, 0);
    stage.bezierCurveTo(44.80000000000001, 0, 0, 44.8, 0, 100);
    stage.closePath();

    stage.moveTo(25, 100);
    stage.bezierCurveTo(25, 58.6, 58.6, 25, 100, 25);
    stage.bezierCurveTo(141.4, 25, 175, 58.6, 175, 100);
    stage.bezierCurveTo(175, 141.4, 141.4, 175, 100, 175);
    stage.bezierCurveTo(58.599999999999994, 175, 25, 141.4, 25, 100);
    stage.closePath();

    //Got to be the D
    stage.fill("evenodd");
    stage.stroke();
    stage.fillStyle = "#00A4E4";
    stage.beginPath();
    stage.moveTo(108, 59);
    stage.lineTo(104, 59);
    stage.bezierCurveTo(105.3, 59, 106.7, 59.1, 108, 59.2);
    stage.lineTo(108, 59);
    stage.closePath();

    stage.moveTo(90, 120);
    stage.lineTo(90, 80);
    stage.lineTo(106.8, 80);
    stage.bezierCurveTo(112.7, 81, 117.6, 85.1, 120.7, 90.4);
    stage.bezierCurveTo(124.2, 96.5, 124.2, 103.5, 120.7, 109.7);
    stage.bezierCurveTo(117.60000000000001, 115, 112.7, 119.10000000000001, 106.8, 120.10000000000001);
    stage.lineTo(90, 120.10000000000001);
    stage.closePath();

    stage.moveTo(104, 59);
    stage.lineTo(90, 59);
    stage.lineTo(66, 59);
    stage.lineTo(66, 141);
    stage.lineTo(90, 141);
    stage.lineTo(103.9, 141);
    stage.lineTo(104.10000000000001, 141);
    stage.bezierCurveTo(105.4, 141, 106.7, 140.9, 108.00000000000001, 140.8);
    stage.bezierCurveTo(121.30000000000001, 139.60000000000002, 132.60000000000002, 132.4, 139.5, 120.50000000000001);
    stage.bezierCurveTo(147.1, 107.40000000000002, 147.1, 92.60000000000002, 139.5, 79.50000000000001);
    stage.bezierCurveTo(132.6, 67.60000000000001, 121.3, 60.40000000000001, 108, 59.20000000000002);
    stage.bezierCurveTo(106.7, 59.1, 105.3, 59, 104, 59);
    stage.closePath();

    stage.moveTo(104.1, 141);
    stage.lineTo(108, 141);
    stage.lineTo(108, 140.8);
    stage.bezierCurveTo(106.7, 140.9, 105.4, 141, 104.1, 141);
    stage.closePath();

    //panda black spots
    stage.fill("evenodd");
    stage.stroke();
    stage.restore();
    stage.save();
    stage.translate((canvas.width / 2) - 157, 15);
    stage.strokeStyle = "rgba(0,0,0,0)";
    stage.miterLimit = 4;
    stage.fillStyle = "#231f20";
    stage.beginPath();
    stage.moveTo(52.41, 1.12);
    stage.bezierCurveTo(55.39, 0.83, 58.77, -0.42, 61.43, 1.57);
    stage.bezierCurveTo(70.27, 7.3, 78.69, 13.66, 87.34, 19.66);
    stage.bezierCurveTo(89.94, 21.82, 93.26, 19.95, 96.03, 19.2);
    stage.bezierCurveTo(110.82, 14.59, 125.67, 10.17, 140.55, 5.87);
    stage.bezierCurveTo(151.45, 4.48, 162.63, 4.49, 173.52, 5.88);
    stage.bezierCurveTo(189.94, 10.38, 206.12, 15.76, 222.5, 20.41);
    stage.bezierCurveTo(224.77, 21.41, 226.6, 19.6, 228.31, 18.41);
    stage.bezierCurveTo(236.75, 12.19, 245.64, 6.61, 254.11, 0.42);
    stage.bezierCurveTo(263.38, 1.18, 272.5, 3.14, 281.76, 4);
    stage.bezierCurveTo(287.53, 11.29, 293.49, 18.43, 299.78, 25.28);
    stage.bezierCurveTo(301.4, 27.19, 303.3, 29.24, 303.22, 31.92);
    stage.bezierCurveTo(304.33, 44.78, 304.97, 57.67, 306.14, 70.52);
    stage.bezierCurveTo(301.08, 76.45, 296.41, 82.71, 291.33, 88.63);
    stage.bezierCurveTo(293.56, 90.86, 295.78, 93.09, 298.01, 95.31);
    stage.bezierCurveTo(303.04, 119.6, 308.1, 143.87, 313.1, 168.17);
    stage.bezierCurveTo(313.8, 170.99, 312.97, 173.83, 312.36, 176.58);
    stage.bezierCurveTo(307.83, 194.7, 303.78, 212.93, 299.33, 231.07);
    stage.bezierCurveTo(298.93, 232.81, 298.18, 234.56, 296.56, 235.5);
    stage.bezierCurveTo(274.05, 251.67, 251.78, 268.16, 229.3, 284.38);
    stage.bezierCurveTo(227.52, 285.78, 225.27, 286.25, 223.05, 286.22);
    stage.bezierCurveTo(211.12, 286.42, 199.17, 286.88, 187.3, 288);

    stage.lineTo(127.03, 288);
    stage.bezierCurveTo(116.03, 286.99, 104.99, 286.39, 93.95, 286.28);
    stage.bezierCurveTo(90.78, 286.13, 87.23, 286.49, 84.64, 284.27);
    stage.bezierCurveTo(61.46, 267.43, 38.26, 250.62, 15.15, 233.68);
    stage.bezierCurveTo(10.21, 213.45, 5.44, 193.16, 0.67, 172.89);
    stage.bezierCurveTo(-0.06, 168.86, 1.53, 164.92, 2.26, 161.01);
    stage.bezierCurveTo(6.52, 140.02, 10.97, 119.06, 15.33, 98.09);
    stage.bezierCurveTo(16.01, 93.9, 19.94, 91.51, 22.61, 88.59);
    stage.bezierCurveTo(18.01, 83.1, 13.29, 77.7, 8.99, 71.97);
    stage.bezierCurveTo(7.28, 70.04, 8.16, 67.37, 8.29, 65.09);
    stage.bezierCurveTo(9.18, 54.05, 9.72, 42.99, 10.69, 31.95);
    stage.bezierCurveTo(10.6, 28.96, 13.13, 27.01, 14.77, 24.84);
    stage.bezierCurveTo(20.75, 18.04, 26.33, 10.9, 32.43, 4.23);
    stage.bezierCurveTo(38.98, 2.62, 45.77, 2.28, 52.41, 1.12);

    stage.moveTo(91.13, 23.28);
    stage.bezierCurveTo(93.85, 33.4, 96.66, 43.5, 99.5, 53.59);
    stage.bezierCurveTo(106.83, 56.36, 113.93, 59.74, 121.4, 62.09);
    stage.bezierCurveTo(122.03, 64, 122.37, 65.99, 122.34, 68.01);
    stage.bezierCurveTo(122.6, 82.98, 122.9, 97.95, 123.38, 112.92);
    stage.bezierCurveTo(145.76, 113.99, 168.22, 114.03, 190.59, 112.89);
    stage.bezierCurveTo(191.13, 96.18, 191.38, 79.48, 191.8, 62.77);
    stage.bezierCurveTo(199.29, 59.48, 206.98, 56.65, 214.53, 53.49);
    stage.bezierCurveTo(217.2, 43.36, 220.26, 33.32, 222.76, 23.14);
    stage.bezierCurveTo(205.46, 18.36, 188.42, 12.64, 171.12, 7.84);
    stage.bezierCurveTo(165.46, 7.35, 159.74, 7.73, 154.06, 7.61);
    stage.bezierCurveTo(149.42, 7.8, 144.63, 7.03, 140.14, 8.53);
    stage.bezierCurveTo(123.8, 13.44, 107.45, 18.32, 91.13, 23.28);

    stage.moveTo(87.99, 25.57);
    stage.bezierCurveTo(65.08, 49.19, 42.07, 72.72, 18.96, 96.15);
    stage.bezierCurveTo(30.35, 115.43, 42.04, 134.52, 53.55, 153.72);
    stage.bezierCurveTo(63.24, 145.33, 72.8, 136.79, 82.52, 128.44);
    stage.bezierCurveTo(84.17, 126.94, 86.18, 125.49, 86.54, 123.12);
    stage.bezierCurveTo(87.73, 118.37, 89.28, 113.7, 90.18, 108.89);
    stage.bezierCurveTo(92.2, 91.88, 94.23, 74.88, 96.39, 57.89);
    stage.bezierCurveTo(96.51, 56.42, 96.74, 54.92, 96.36, 53.48);
    stage.bezierCurveTo(94, 44.24, 90.97, 35.16, 88.99, 25.83);
    stage.bezierCurveTo(88.74, 25.76, 88.24, 25.63, 87.99, 25.57);

    stage.moveTo(218.93, 48.92);
    stage.bezierCurveTo(218.23, 51.51, 217.16, 54.13, 217.57, 56.88);
    stage.bezierCurveTo(219.56, 73.25, 221.65, 89.62, 223.54, 106.02);
    stage.bezierCurveTo(223.88, 110.09, 225.02, 114.03, 226.17, 117.93);
    stage.bezierCurveTo(227.17, 121.03, 227.2, 124.88, 229.99, 127.03);
    stage.bezierCurveTo(240.18, 135.86, 250.23, 144.84, 260.44, 153.64);
    stage.bezierCurveTo(271.95, 134.51, 283.42, 115.35, 294.96, 96.23);
    stage.bezierCurveTo(271.77, 72.67, 248.57, 49.09, 225.68, 25.24);
    stage.bezierCurveTo(223.1, 33.03, 221.29, 41.05, 218.93, 48.92);

    stage.moveTo(99.48, 56.77);
    stage.bezierCurveTo(97.42, 73.86, 95.25, 90.94, 93.2, 108.03);
    stage.bezierCurveTo(97.22, 105.89, 101.2, 103.67, 105.15, 101.4);
    stage.bezierCurveTo(110.61, 104.6, 115.42, 108.85, 121.06, 111.73);
    stage.bezierCurveTo(120.05, 109.64, 120.34, 107.25, 120.19, 105);
    stage.bezierCurveTo(119.92, 91.58, 119.53, 78.16, 119.26, 64.74);
    stage.bezierCurveTo(112.72, 61.96, 106.06, 59.46, 99.48, 56.77);

    stage.moveTo(194.76, 64.78);
    stage.bezierCurveTo(194.43, 80.37, 194.07, 95.96, 193.64, 111.56);
    stage.bezierCurveTo(198.75, 108.24, 203.67, 104.64, 208.78, 101.33);
    stage.bezierCurveTo(212.77, 103.58, 216.77, 105.8, 220.79, 107.98);
    stage.bezierCurveTo(218.62, 90.94, 216.6, 73.88, 214.47, 56.84);
    stage.bezierCurveTo(207.9, 59.5, 201.28, 62.02, 194.76, 64.78);

    stage.moveTo(17.74, 100.01);
    stage.bezierCurveTo(13.28, 121.64, 8.58, 143.22, 4.37, 164.89);
    stage.bezierCurveTo(14.34, 152.41, 24.38, 139.96, 34.3, 127.44);
    stage.bezierCurveTo(28.76, 118.31, 23.33, 109.12, 17.74, 100.01);

    stage.moveTo(282.24, 123.41);
    stage.bezierCurveTo(281.46, 124.8, 280.43, 126.12, 280.16, 127.72);
    stage.bezierCurveTo(289.73, 140.28, 300.02, 152.3, 309.57, 164.88);
    stage.bezierCurveTo(305.22, 143.43, 300.75, 121.99, 296.21, 100.57);
    stage.bezierCurveTo(291.29, 108.01, 286.93, 115.82, 282.24, 123.41);

    stage.moveTo(123.6, 116.28);
    stage.bezierCurveTo(124.95, 121.57, 125.71, 126.98, 126.85, 132.32);
    stage.bezierCurveTo(146.96, 132.24, 167.07, 132.3, 187.18, 132.27);
    stage.bezierCurveTo(188.22, 126.92, 189.1, 121.52, 190.38, 116.22);
    stage.bezierCurveTo(180.93, 116.29, 171.47, 116.5, 162.02, 116.62);
    stage.bezierCurveTo(149.21, 116.84, 136.41, 116.1, 123.6, 116.28);

    stage.moveTo(3.66, 170.56);
    stage.bezierCurveTo(2.81, 173.27, 4.55, 176.25, 4.93, 179.01);
    stage.bezierCurveTo(9.18, 196.22, 12.86, 213.59, 17.43, 230.72);
    stage.bezierCurveTo(31.15, 221.03, 44.95, 211.44, 58.81, 201.94);
    stage.bezierCurveTo(56.42, 186.79, 54.34, 171.55, 51.56, 156.48);
    stage.bezierCurveTo(46.65, 147.53, 41.07, 138.95, 35.89, 130.14);
    stage.bezierCurveTo(25.25, 143.69, 14.29, 157, 3.66, 170.56);

    stage.moveTo(277.54, 131.3);
    stage.bezierCurveTo(273.77, 137.31, 270.26, 143.49, 266.49, 149.5);
    stage.bezierCurveTo(264.71, 152.62, 262.34, 155.58, 261.82, 159.25);
    stage.bezierCurveTo(259.77, 173.48, 257.3, 187.66, 255.23, 201.89);
    stage.bezierCurveTo(269.04, 211.45, 282.92, 220.93, 296.56, 230.73);
    stage.bezierCurveTo(301.41, 211.97, 305.43, 193.01, 310.15, 174.22);
    stage.bezierCurveTo(310.34, 172.84, 311.16, 171.17, 309.92, 170.07);
    stage.bezierCurveTo(300.02, 157.68, 290.01, 145.36, 280.19, 132.91);
    stage.bezierCurveTo(279.45, 132.12, 278.85, 130.73, 277.54, 131.3);

    stage.moveTo(127.29, 135.24);
    stage.bezierCurveTo(130.22, 163.66, 133.5, 192.05, 136.69, 220.44);
    stage.bezierCurveTo(143.46, 220.9, 150.19, 221.72, 156.97, 221.91);
    stage.bezierCurveTo(163.77, 221.71, 170.54, 220.99, 177.31, 220.41);
    stage.bezierCurveTo(180.5, 192.05, 183.67, 163.68, 186.74, 135.31);
    stage.bezierCurveTo(166.92, 135.18, 147.11, 135.27, 127.29, 135.24);

    stage.moveTo(180.28, 221.3);
    stage.bezierCurveTo(182.12, 223.3, 183.99, 225.27, 185.97, 227.15);
    stage.bezierCurveTo(192.08, 213.01, 198.84, 199.16, 205.14, 185.11);
    stage.bezierCurveTo(206.51, 182.64, 204.65, 180.12, 203.91, 177.78);
    stage.bezierCurveTo(198.83, 165.29, 194.55, 152.45, 188.97, 140.18);
    stage.bezierCurveTo(186.53, 167.26, 183.12, 194.25, 180.28, 221.3);

    stage.moveTo(122.8, 144.76);
    stage.bezierCurveTo(118.7, 155.81, 114.26, 166.73, 110.08, 177.75);
    stage.bezierCurveTo(109.34, 180.1, 107.47, 182.62, 108.83, 185.09);
    stage.bezierCurveTo(115.17, 199.14, 121.84, 213.05, 128.07, 227.15);
    stage.bezierCurveTo(130.06, 225.3, 131.9, 223.31, 133.7, 221.29);
    stage.bezierCurveTo(130.86, 194.43, 127.73, 167.59, 124.94, 140.73);
    stage.bezierCurveTo(124.13, 142.01, 123.35, 143.33, 122.8, 144.76);

    stage.moveTo(105.97, 188.31);
    stage.bezierCurveTo(103.14, 196.27, 99.89, 204.07, 96.94, 211.99);
    stage.bezierCurveTo(95.67, 215.58, 93.61, 218.99, 93.4, 222.87);
    stage.bezierCurveTo(93.07, 230.57, 92.53, 238.25, 92.23, 245.96);
    stage.bezierCurveTo(103.58, 240.63, 114.73, 234.87, 125.88, 229.16);
    stage.bezierCurveTo(119.61, 215.5, 113.12, 201.94, 107.08, 188.19);
    stage.bezierCurveTo(106.8, 188.22, 106.25, 188.28, 105.97, 188.31);

    stage.moveTo(204, 194.86);
    stage.bezierCurveTo(198.72, 206.32, 193.44, 217.78, 188.15, 229.23);
    stage.bezierCurveTo(199.33, 234.84, 210.48, 240.53, 221.73, 246.01);
    stage.bezierCurveTo(221.57, 240.68, 221.23, 235.36, 220.84, 230.05);
    stage.bezierCurveTo(220.54, 226.41, 221.06, 222.62, 219.84, 219.12);
    stage.bezierCurveTo(215.83, 208.63, 211.55, 198.24, 207.77, 187.66);
    stage.bezierCurveTo(206.12, 189.84, 205.08, 192.37, 204, 194.86);

    stage.moveTo(19.02, 233.3);
    stage.bezierCurveTo(41.68, 249.73, 64.28, 266.25, 86.97, 282.64);
    stage.bezierCurveTo(91.66, 273.84, 96.59, 265.18, 101.34, 256.42);
    stage.bezierCurveTo(97.33, 254.13, 93.36, 251.76, 89.33, 249.51);
    stage.bezierCurveTo(89.2, 240.01, 90.48, 230.58, 90.48, 221.08);
    stage.bezierCurveTo(80.46, 215.63, 70.58, 209.92, 60.69, 204.24);
    stage.bezierCurveTo(46.76, 213.87, 32.73, 223.36, 19.02, 233.3);

    stage.moveTo(223.59, 221.11);
    stage.bezierCurveTo(223.53, 230.59, 224.91, 240.01, 224.68, 249.51);
    stage.bezierCurveTo(220.72, 251.77, 216.83, 254.16, 212.8, 256.31);
    stage.bezierCurveTo(217.18, 265.27, 222.52, 273.74, 227.04, 282.63);
    stage.bezierCurveTo(249.72, 266.17, 272.36, 249.67, 295, 233.16);
    stage.bezierCurveTo(280.96, 223.68, 267.34, 213.56, 253.13, 204.34);
    stage.bezierCurveTo(243.39, 210.11, 233.46, 215.56, 223.59, 221.11);

    stage.moveTo(93.88, 248.65);
    stage.bezierCurveTo(102.79, 253.95, 111.82, 259.05, 120.79, 264.25);
    stage.bezierCurveTo(122.32, 265.41, 124.18, 264.49, 125.79, 264.07);
    stage.bezierCurveTo(135.17, 261.03, 144.56, 258.02, 153.96, 255.03);
    stage.bezierCurveTo(145.19, 247.16, 136.39, 239.33, 127.38, 231.75);
    stage.bezierCurveTo(116.29, 237.53, 105.01, 242.94, 93.88, 248.65);

    stage.moveTo(185, 233.04);
    stage.bezierCurveTo(176.66, 240.36, 168.24, 247.6, 160, 255.04);
    stage.bezierCurveTo(170.61, 258.19, 181.04, 262.12, 191.75, 264.83);
    stage.bezierCurveTo(201.34, 259.71, 210.73, 254.12, 220.12, 248.6);
    stage.bezierCurveTo(209.99, 243.48, 199.77, 238.55, 189.68, 233.34);
    stage.bezierCurveTo(188.21, 232.66, 186.27, 231.25, 185, 233.04);

    stage.moveTo(103.92, 258.01);
    stage.bezierCurveTo(99.36, 266.52, 94.46, 274.85, 89.9, 283.36);
    stage.bezierCurveTo(101.4, 283.94, 112.89, 284.51, 124.39, 284.79);
    stage.bezierCurveTo(119.43, 277.34, 114.45, 269.91, 109.54, 262.43);
    stage.bezierCurveTo(108.32, 260.24, 106.06, 259.1, 103.92, 258.01);

    stage.moveTo(204.46, 262.44);
    stage.bezierCurveTo(199.58, 269.93, 194.58, 277.33, 189.65, 284.78);
    stage.bezierCurveTo(201.14, 284.55, 212.6, 283.83, 224.07, 283.4);
    stage.bezierCurveTo(219.51, 274.88, 214.66, 266.53, 210.06, 258.03);
    stage.bezierCurveTo(207.98, 259.18, 205.7, 260.29, 204.46, 262.44);

    stage.moveTo(114.06, 263.62);
    stage.bezierCurveTo(118.54, 270.9, 123.48, 277.89, 128.06, 285.1);
    stage.bezierCurveTo(147.38, 285.04, 166.71, 285.34, 186.03, 284.93);
    stage.bezierCurveTo(190.47, 277.82, 195.35, 270.99, 199.82, 263.9);
    stage.bezierCurveTo(195.92, 265.82, 192.81, 268.91, 189.23, 271.3);
    stage.bezierCurveTo(186.86, 271.89, 184.37, 271.5, 181.96, 271.58);
    stage.bezierCurveTo(163.95, 271.57, 145.94, 271.52, 127.93, 271.59);
    stage.bezierCurveTo(126.7, 271.49, 125.28, 271.79, 124.25, 270.93);
    stage.bezierCurveTo(120.86, 268.47, 117.73, 265.66, 114.06, 263.62);
    stage.closePath();

    //end black panda spots

    //timer words
    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(91.13, 23.28);
    stage.bezierCurveTo(107.45, 18.32, 123.8, 13.44, 140.14, 8.53);
    stage.bezierCurveTo(144.63, 7.03, 149.42, 7.8, 154.06, 7.61);
    stage.bezierCurveTo(159.74, 7.73, 165.46, 7.35, 171.12, 7.84);
    stage.bezierCurveTo(188.42, 12.64, 205.46, 18.36, 222.76, 23.14);
    stage.bezierCurveTo(220.26, 33.32, 217.2, 43.36, 214.53, 53.49);
    stage.bezierCurveTo(206.98, 56.65, 199.29, 59.48, 191.8, 62.77);
    stage.bezierCurveTo(191.38, 79.48, 191.13, 96.18, 190.59, 112.89);
    stage.bezierCurveTo(168.22, 114.03, 145.76, 113.99, 123.38, 112.92);
    stage.bezierCurveTo(122.9, 97.95, 122.6, 82.98, 122.34, 68.01);
    stage.bezierCurveTo(122.37, 65.99, 122.03, 64, 121.4, 62.09);
    stage.bezierCurveTo(113.93, 59.74, 106.83, 56.36, 99.5, 53.59);
    stage.bezierCurveTo(96.66, 43.5, 93.85, 33.4, 91.13, 23.28);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(87.99, 25.57);
    stage.bezierCurveTo(88.24, 25.63, 88.74, 25.76, 88.99, 25.83);
    stage.bezierCurveTo(90.97, 35.16, 94, 44.24, 96.36, 53.48);
    stage.bezierCurveTo(96.74, 54.92, 96.51, 56.42, 96.39, 57.89);
    stage.bezierCurveTo(94.23, 74.88, 92.2, 91.88, 90.18, 108.89);
    stage.bezierCurveTo(89.28, 113.7, 87.73, 118.37, 86.54, 123.12);
    stage.bezierCurveTo(86.18, 125.49, 84.17, 126.94, 82.52, 128.44);
    stage.bezierCurveTo(72.8, 136.79, 63.24, 145.33, 53.55, 153.72);
    stage.bezierCurveTo(42.04, 134.52, 30.35, 115.43, 18.96, 96.15);
    stage.bezierCurveTo(42.07, 72.72, 65.08, 49.19, 87.99, 25.57);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(218.93, 48.92);
    stage.bezierCurveTo(221.29, 41.05, 223.1, 33.03, 225.68, 25.24);
    stage.bezierCurveTo(248.57, 49.09, 271.77, 72.67, 294.96, 96.23);
    stage.bezierCurveTo(283.42, 115.35, 271.95, 134.51, 260.44, 153.64);
    stage.bezierCurveTo(250.23, 144.84, 240.18, 135.86, 229.99, 127.03);
    stage.bezierCurveTo(227.2, 124.88, 227.17, 121.03, 226.17, 117.93);
    stage.bezierCurveTo(225.02, 114.03, 223.88, 110.09, 223.54, 106.02);
    stage.bezierCurveTo(221.65, 89.62, 219.56, 73.25, 217.57, 56.88);
    stage.bezierCurveTo(217.16, 54.13, 218.23, 51.51, 218.93, 48.92);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(99.48, 56.77);
    stage.bezierCurveTo(106.06, 59.46, 112.72, 61.96, 119.26, 64.74);
    stage.bezierCurveTo(119.53, 78.16, 119.92, 91.58, 120.19, 105);
    stage.bezierCurveTo(120.34, 107.25, 120.05, 109.64, 121.06, 111.73);
    stage.bezierCurveTo(115.42, 108.85, 110.61, 104.6, 105.15, 101.4);
    stage.bezierCurveTo(101.2, 103.67, 97.22, 105.89, 93.2, 108.03);
    stage.bezierCurveTo(95.25, 90.94, 97.42, 73.86, 99.48, 56.77);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(194.76, 64.78);
    stage.bezierCurveTo(201.28, 62.02, 207.9, 59.5, 214.47, 56.84);
    stage.bezierCurveTo(216.6, 73.88, 218.62, 90.94, 220.79, 107.98);
    stage.bezierCurveTo(216.77, 105.8, 212.77, 103.58, 208.78, 101.33);
    stage.bezierCurveTo(203.67, 104.64, 198.75, 108.24, 193.64, 111.56);
    stage.bezierCurveTo(194.07, 95.96, 194.43, 80.37, 194.76, 64.78);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(17.74, 100.01);
    stage.bezierCurveTo(23.33, 109.12, 28.76, 118.31, 34.3, 127.44);
    stage.bezierCurveTo(24.38, 139.96, 14.34, 152.41, 4.37, 164.89);
    stage.bezierCurveTo(8.58, 143.22, 13.28, 121.64, 17.74, 100.01);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(282.24, 123.41);
    stage.bezierCurveTo(286.93, 115.82, 291.29, 108.01, 296.21, 100.57);
    stage.bezierCurveTo(300.75, 121.99, 305.22, 143.43, 309.57, 164.88);
    stage.bezierCurveTo(300.02, 152.3, 289.73, 140.28, 280.16, 127.72);
    stage.bezierCurveTo(280.43, 126.12, 281.46, 124.8, 282.24, 123.41);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(123.6, 116.28);
    stage.bezierCurveTo(136.41, 116.1, 149.21, 116.84, 162.02, 116.62);
    stage.bezierCurveTo(171.47, 116.5, 180.93, 116.29, 190.38, 116.22);
    stage.bezierCurveTo(189.1, 121.52, 188.22, 126.92, 187.18, 132.27);
    stage.bezierCurveTo(167.07, 132.3, 146.96, 132.24, 126.85, 132.32);
    stage.bezierCurveTo(125.71, 126.98, 124.95, 121.57, 123.6, 116.28);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(3.66, 170.56);
    stage.bezierCurveTo(14.29, 157, 25.25, 143.69, 35.89, 130.14);
    stage.bezierCurveTo(41.07, 138.95, 46.65, 147.53, 51.56, 156.48);
    stage.bezierCurveTo(54.34, 171.55, 56.42, 186.79, 58.81, 201.94);
    stage.bezierCurveTo(44.95, 211.44, 31.15, 221.03, 17.43, 230.72);
    stage.bezierCurveTo(12.86, 213.59, 9.18, 196.22, 4.93, 179.01);
    stage.bezierCurveTo(4.55, 176.25, 2.81, 173.27, 3.66, 170.56);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(277.54, 131.3);
    stage.bezierCurveTo(278.85, 130.73, 279.45, 132.12, 280.19, 132.91);
    stage.bezierCurveTo(290.01, 145.36, 300.02, 157.68, 309.92, 170.07);
    stage.bezierCurveTo(311.16, 171.17, 310.34, 172.84, 310.15, 174.22);
    stage.bezierCurveTo(305.43, 193.01, 301.41, 211.97, 296.56, 230.73);
    stage.bezierCurveTo(282.92, 220.93, 269.04, 211.45, 255.23, 201.89);
    stage.bezierCurveTo(257.3, 187.66, 259.77, 173.48, 261.82, 159.25);
    stage.bezierCurveTo(262.34, 155.58, 264.71, 152.62, 266.49, 149.5);
    stage.bezierCurveTo(270.26, 143.49, 273.77, 137.31, 277.54, 131.3);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(127.29, 135.24);
    stage.bezierCurveTo(147.11, 135.27, 166.92, 135.18, 186.74, 135.31);
    stage.bezierCurveTo(183.67, 163.68, 180.5, 192.05, 177.31, 220.41);
    stage.bezierCurveTo(170.54, 220.99, 163.77, 221.71, 156.97, 221.91);
    stage.bezierCurveTo(150.19, 221.72, 143.46, 220.9, 136.69, 220.44);
    stage.bezierCurveTo(133.5, 192.05, 130.22, 163.66, 127.29, 135.24);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(180.28, 221.3);
    stage.bezierCurveTo(183.12, 194.25, 186.53, 167.26, 188.97, 140.18);
    stage.bezierCurveTo(194.55, 152.45, 198.83, 165.29, 203.91, 177.78);
    stage.bezierCurveTo(204.65, 180.12, 206.51, 182.64, 205.14, 185.11);
    stage.bezierCurveTo(198.84, 199.16, 192.08, 213.01, 185.97, 227.15);
    stage.bezierCurveTo(183.99, 225.27, 182.12, 223.3, 180.28, 221.3);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(122.8, 144.76);
    stage.bezierCurveTo(123.35, 143.33, 124.13, 142.01, 124.94, 140.73);
    stage.bezierCurveTo(127.73, 167.59, 130.86, 194.43, 133.7, 221.29);
    stage.bezierCurveTo(131.9, 223.31, 130.06, 225.3, 128.07, 227.15);
    stage.bezierCurveTo(121.84, 213.05, 115.17, 199.14, 108.83, 185.09);
    stage.bezierCurveTo(107.47, 182.62, 109.34, 180.1, 110.08, 177.75);
    stage.bezierCurveTo(114.26, 166.73, 118.7, 155.81, 122.8, 144.76);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(105.97, 188.31);
    stage.bezierCurveTo(106.25, 188.28, 106.8, 188.22, 107.08, 188.19);
    stage.bezierCurveTo(113.12, 201.94, 119.61, 215.5, 125.88, 229.16);
    stage.bezierCurveTo(114.73, 234.87, 103.58, 240.63, 92.23, 245.96);
    stage.bezierCurveTo(92.53, 238.25, 93.07, 230.57, 93.4, 222.87);
    stage.bezierCurveTo(93.61, 218.99, 95.67, 215.58, 96.94, 211.99);
    stage.bezierCurveTo(99.89, 204.07, 103.14, 196.27, 105.97, 188.31);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(204, 194.86);
    stage.bezierCurveTo(205.08, 192.37, 206.12, 189.84, 207.77, 187.66);
    stage.bezierCurveTo(211.55, 198.24, 215.83, 208.63, 219.84, 219.12);
    stage.bezierCurveTo(221.06, 222.62, 220.54, 226.41, 220.84, 230.05);
    stage.bezierCurveTo(221.23, 235.36, 221.57, 240.68, 221.73, 246.01);
    stage.bezierCurveTo(210.48, 240.53, 199.33, 234.84, 188.15, 229.23);
    stage.bezierCurveTo(193.44, 217.78, 198.72, 206.32, 204, 194.86);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(19.02, 233.3);
    stage.bezierCurveTo(32.73, 223.36, 46.76, 213.87, 60.69, 204.24);
    stage.bezierCurveTo(70.58, 209.92, 80.46, 215.63, 90.48, 221.08);
    stage.bezierCurveTo(90.48, 230.58, 89.2, 240.01, 89.33, 249.51);
    stage.bezierCurveTo(93.36, 251.76, 97.33, 254.13, 101.34, 256.42);
    stage.bezierCurveTo(96.59, 265.18, 91.66, 273.84, 86.97, 282.64);
    stage.bezierCurveTo(64.28, 266.25, 41.68, 249.73, 19.02, 233.3);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(223.59, 221.11);
    stage.bezierCurveTo(233.46, 215.56, 243.39, 210.11, 253.13, 204.34);
    stage.bezierCurveTo(267.34, 213.56, 280.96, 223.68, 295, 233.16);
    stage.bezierCurveTo(272.36, 249.67, 249.72, 266.17, 227.04, 282.63);
    stage.bezierCurveTo(222.52, 273.74, 217.18, 265.27, 212.8, 256.31);
    stage.bezierCurveTo(216.83, 254.16, 220.72, 251.77, 224.68, 249.51);
    stage.bezierCurveTo(224.91, 240.01, 223.53, 230.59, 223.59, 221.11);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(93.88, 248.65);
    stage.bezierCurveTo(105.01, 242.94, 116.29, 237.53, 127.38, 231.75);
    stage.bezierCurveTo(136.39, 239.33, 145.19, 247.16, 153.96, 255.03);
    stage.bezierCurveTo(144.56, 258.02, 135.17, 261.03, 125.79, 264.07);
    stage.bezierCurveTo(124.18, 264.49, 122.32, 265.41, 120.79, 264.25);
    stage.bezierCurveTo(111.82, 259.05, 102.79, 253.95, 93.88, 248.65);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(185, 233.04);
    stage.bezierCurveTo(186.27, 231.25, 188.21, 232.66, 189.68, 233.34);
    stage.bezierCurveTo(199.77, 238.55, 209.99, 243.48, 220.12, 248.6);
    stage.bezierCurveTo(210.73, 254.12, 201.34, 259.71, 191.75, 264.83);
    stage.bezierCurveTo(181.04, 262.12, 170.61, 258.19, 160, 255.04);
    stage.bezierCurveTo(168.24, 247.6, 176.66, 240.36, 185, 233.04);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(103.92, 258.01);
    stage.bezierCurveTo(106.06, 259.1, 108.32, 260.24, 109.54, 262.43);
    stage.bezierCurveTo(114.45, 269.91, 119.43, 277.34, 124.39, 284.79);
    stage.bezierCurveTo(112.89, 284.51, 101.4, 283.94, 89.9, 283.36);
    stage.bezierCurveTo(94.46, 274.85, 99.36, 266.52, 103.92, 258.01);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(204.46, 262.44);
    stage.bezierCurveTo(205.7, 260.29, 207.98, 259.18, 210.06, 258.03);
    stage.bezierCurveTo(214.66, 266.53, 219.51, 274.88, 224.07, 283.4);
    stage.bezierCurveTo(212.6, 283.83, 201.14, 284.55, 189.65, 284.78);
    stage.bezierCurveTo(194.58, 277.33, 199.58, 269.93, 204.46, 262.44);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.fillStyle = "#d9d7d8";
    stage.beginPath();
    stage.moveTo(114.06, 263.62);
    stage.bezierCurveTo(117.73, 265.66, 120.86, 268.47, 124.25, 270.93);
    stage.bezierCurveTo(125.28, 271.79, 126.7, 271.49, 127.93, 271.59);
    stage.bezierCurveTo(145.94, 271.52, 163.95, 271.57, 181.96, 271.58);
    stage.bezierCurveTo(184.37, 271.5, 186.86, 271.89, 189.23, 271.3);
    stage.bezierCurveTo(192.81, 268.91, 195.92, 265.82, 199.82, 263.9);
    stage.bezierCurveTo(195.35, 270.99, 190.47, 277.82, 186.03, 284.93);
    stage.bezierCurveTo(166.71, 285.34, 147.38, 285.04, 128.06, 285.1);
    stage.bezierCurveTo(123.48, 277.89, 118.54, 270.9, 114.06, 263.62);
    stage.closePath();

    stage.fill();
    stage.stroke();
    stage.restore();
  }
  //end
  init();
  </script>
@endsection
