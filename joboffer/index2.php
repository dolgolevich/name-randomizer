<html>
<head>
    <title>House builder</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
<noscript>��� ������ ���������������� ����� ����� ���������� �������� JavaScript</noscript>
<input type="range" min="1" max="10" step="1" value="1" id="range">
<input type="text" name="rangeDisplay" id="rangeDisplay">
<div id="roof"><canvas id="canvas"></canvas>
</div>
<div id="house">
    <ul><li><p></p><p></p></li></ul>
</div>
<div id="ground">
    <p></p>
</div>
<script>
    document.getElementById("rangeDisplay").value = document.getElementById("range").value;

    var ctx = document.getElementById("canvas").getContext("2d");
    ctx.lineWidth = 2;
    ctx.strokeStyle = "black";

    ctx.beginPath();
    ctx.moveTo(0,30);
    ctx.lineTo(77,0);
    ctx.lineTo(154,30);
    ctx.stroke();


    var canvas = document.getElementById("canvas");
    canvas.getContext("2d").lineWidth = 1;
    canvas.getContext("2d").moveTo(0,0);
    canvas.getContext("2d").lineTo(75,30);

    document.getElementById("range").addEventListener('input',function(){
        document.getElementById("rangeDisplay").value = document.getElementById("range").value;

        var floorNumber = document.getElementById("range").value;

        var innerTags = "";

        for(var i = 0; i < floorNumber; i++){
            innerTags = innerTags+"<li><p></p><p></p></li>"
        }
        document.getElementById("house").innerHTML = "<ul>"+innerTags+"</ul>";
    }, false);
</script>
</body>
</html>