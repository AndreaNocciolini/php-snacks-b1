<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- Include Database -->
    <?php include __DIR__ . '/server/db.php' ?>
    <?php include __DIR__ . '/server/controller-api.php' ?>
    <div id="app">
        <!-- Include Header -->
        <?php include_once __DIR__ . '/partials/header.php' ?>

        <!-- Include Main -->
        <?php include_once __DIR__ . '/partials/main.php' ?>

        <!-- Include Footer -->
        <?php include_once __DIR__ . '/partials/footer.php' ?>
    </div>

    <!-- Link JS and Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>