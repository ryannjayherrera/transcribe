<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANH | Transcribe</title>
    <script src="https://storage.googleapis.com/cdn.chatcare.co/initChatcare.js" data-chatbot-id="8e9f7bfd-a96c-424b-a60c-db4738604fc0" id="initChatcareScript"></script>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/login.css" /> -->

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">

        <?php include 'navbar.php' ?> <!-- This is the navbar -->

        <!-- ========================= Main ==================== -->
        
        <div class="main">
            <?php include 'topbar.php' ?> <!-- This is the topbar -->
            <?php $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; ?>
            <?php include $page . '.php' ?>
        </div>


    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>



    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>