<html>
<head>
    <title>Project Submit Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
</head>
<body>
<form class="form-control" method="POST" action="submit.php" enctype="multipart/form-data">
    <div align="center" class="container">
        <h3>Project Submission Panel</h3>
        <input class="form-control" placeholder="Project Name" name="project_name" type="text"><br>
        <input class="form-control" placeholder="Project Catchline" name="catch_line" type="text"><br>
        <select class="form-control" name="category">
            <option value="NotSelected" disabled selected>Select an Option</option>
            <option value="web">Web App</option>
            <option value="game">Game</option>
            <option value="random">Random Solutions</option>
        </select><br>
        <input class="form-control" name="img" type="file" accept="image/*" required><br>
        <input class="form-control" value="Submit" name="submit" type="submit">
    </div>


</form>
</body>
</html>