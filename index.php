<?php
include('config.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Scanner</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<style>
  body {
    font: 18px sans-serif;
    text-align: center;
    padding-right: 300px;
    padding-left: 300px;
    border: 10px;
  }
    canvas {
        display: none;
    }
    hr {
        margin-top: 32px;
    }
    input[type="file"] {
        display: block;
        margin-bottom: 16px;
    }
    div {
        margin-bottom: 16px;
    }
</style>
<h1>Scan Your Desired Item</h1>
<br><br>
<div>
    <p>Device has camera: </p>
    <span id="cam-has-camera"></span>
    <br>
    <video width="320" height="320" muted playsinline id="qr-video"></video>
</div>
<div>

    <select id="inversion-mode-select">
        <option value="original">Scan original (dark QR code on bright background)</option>
        <option value="invert">Scan with inverted colors (bright QR code on dark background)</option>
        <option value="both">Scan both</option>
    </select>
    <br>
</div>
<b>Detected Product ID is: </b>
<span id="cam-qr-result"></span>
<br>
<b>Last detected at: </b>
<span id="cam-qr-result-timestamp"></span>
<br/>

<br/>
<button class="btn btn-success" onclick="add()">ADD</button>

<hr>
<!---
<br/>

<a href="kart.php?id=<?php echo htmlentities($row['id']);?>">ADD</a>
<br/>
--->
<table class="table" id="list" align="center" frame="box">

<thead class="thead-dark">
<td align="center"><b>ID</b></td>
<td align="center"><b>NAME</b></td>
<td align="center"><b>PRICE</b></td>
</thead>

</table>

<script type="module">
    import QrScanner from "../qr-scanner.min.js";
    QrScanner.WORKER_PATH = '../qr-scanner-worker.min.js';

    const video = document.getElementById('qr-video');
    const camHasCamera = document.getElementById('cam-has-camera');
    const camQrResult = document.getElementById('cam-qr-result');
    const camQrResultTimestamp = document.getElementById('cam-qr-result-timestamp');
    const fileSelector = document.getElementById('file-selector');
    const fileQrResult = document.getElementById('file-qr-result');



    function setResult(label, result) {
        label.textContent = result;
        camQrResultTimestamp.textContent = new Date().toString();
        label.style.color = 'teal';
        clearTimeout(label.highlightTimeout);
        label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
        var id=result;
    }

    QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);

    const scanner = new QrScanner(video, result => setResult(camQrResult, result));
    scanner.start();

    document.getElementById('inversion-mode-select').addEventListener('change', event => {
        scanner.setInversionMode(event.target.value);
    });





</script>
<script>
    function add()
    {
        var id=document.getElementById('cam-qr-result').textContent;
        var table = document.getElementById("list");
        var id1=[1,2,3,4];
        var name=["RICE","ALMONDS 1KG","OATS 1KG","WALNUTS 500g"];
        var price=[50,1000,250,650];
        if(id<=4)
        {
            var row = table.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML=id1[id-1];
        cell2.innerHTML=name[id-1];
        cell3.innerHTML=price[id-1];

        }


    }
</script>
<br><br>
<blockquote class="blockquote text-center" style="font: 16px sans-serif;">
<p class="mb-0">Food is not rational. Food is culture, habit, craving and identity.</p>
<footer class="blockquote-footer">Jonathan Safran Foer<cite title="Source Title"></cite></footer>
</blockquote>
</body>
</html>
