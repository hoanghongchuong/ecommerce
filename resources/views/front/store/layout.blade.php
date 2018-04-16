<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <title>Trang chủ | Thương Mại Điện Tử </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="copyright" content="" />

    <meta property="og:image" content="">
    <!--link css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/css/slimselect.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/responsive.css')}}">

    <!--Jquery library-->
    <script type="text/javascript" src="{{asset('/front/js/jquery.min.js')}}"></script>
</head>
<body>
@include('front.store._particals.header')

    @yield('contentStore')
@include('front.store._particals.footer')

<!--Link js-->
<script type="text/javascript" src="{{ asset('/front/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/jquery.steps.min.js')}}"></script>

<script type="text/javascript" src="{{asset('/front/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/slimselect.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/private.js')}}"></script>
<script type="text/javascript" src="{{asset('/plugin/ckeditor/ckeditor.js')}}"></script>

<script>
    var config = {
        type: 'line',
        data: {
            labels: ['MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'],
            datasets: [{
                lineTension	: 0,
                label: 'Tuần này',
                backgroundColor: [ 'rgba(230,32,32,1)' ],
                borderColor: [ 'rgba(230,32,32,1)' ],
                data: [0, 40, 60, 80, 100, 200, 90],
                fill: false
            }, {
                lineTension	: 0,
                label: 'Tuần trước',
                fill: false,
                backgroundColor: [ 'rgba(136,194,175,1)' ],
                borderColor: [ 'rgba(136,194,175,1)' ],
                data: [0, 20, 30, 40, 70, 150, 70]
            }]
        },
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Line Chart'
            },
            tooltips: {
                backgroundColor: [ 'rgba(136,194,175,1)' ],
                mode: 'index',
                intersect: true
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Week'
                    }
                }],
                yAxes: [{
                    ticks: {
                        max: 250,
                        min: 0,
                        stepSize: 50
                    }
                }]
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myLine = new Chart(ctx, config);
    };
</script>
<script>
    var form = $("#steps-form");
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft"
    });
</script>
<script>
    new SlimSelect({
        select: '#single',
        showSearch: true
    });

    new SlimSelect({
        select: '#multiple',
        showSearch: true
    });

</script>

</body>
</html>