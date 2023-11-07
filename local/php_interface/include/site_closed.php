<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .site-closed {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            gap: 20px;
        }
        .site-closed p {
            text-align: center;
            font-size: 60px;
            margin: 0px;
            color: darkgrey;
            font-weight: 600;
            align-self: center;
        }
        .site-closed a {
            color: darkblue;
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="site-closed">
    <p id="demo"></p>
    <a href="/bitrix/" rel="nofollow">
        вход для администраторов
    </a>
</div>


<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 31, 2023 23:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + " д. " + hours + " ч. "
            + minutes + " м. " + seconds + " с. ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

</body>
</html>



