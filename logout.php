<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>

<script>
    sessionStorage.removeItem("adminLogin");
    window.location.href = "index.php";
</script>

</body>
</html>