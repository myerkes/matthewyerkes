<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="/normalize.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>homepage</title>

        <script>
        </script>

        <style>
            header {
                text-align: center;
            }
            div {
                background-color: #7aa6ec;
            }
            body {
                text-align: center;
            }
            ul {
                padding: 10px;
            }
            li {
                display: inline;
                padding: 0px 10px 0px 10px;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>Resume</h1>

            <?php include 'templates/navigation.php'; ?>
        </div>

        
        <embed src="Matt Yerkes Resume.pdf" width="100%" height="2100px" />

        <?php include 'templates/footer.php'; ?>
    </body>

</html>