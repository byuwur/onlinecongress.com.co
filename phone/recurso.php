<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Recurso</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <style>
    html, body { background: #000 !important; overflow: hidden !important; }
    iframe {
        margin: 0 auto; padding: 0;
        top: 0; bottom: 0; left: 0; right: 0;
        display: block !important; position: absolute !important;
        width: 100vw !important; height: 56.25vw !important;
        /* 100/56.25 = 560/315 = 1.778 */ background: #000;  
    }
    </style>
</head>
<body>
<?= '<iframe src="https://www.youtube.com/embed/MAlSjtxy5ak" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' ?>
</body>
</html>