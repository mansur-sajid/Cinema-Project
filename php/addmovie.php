<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <form action="addm.php" method = "post" class="col-4 offset-4" enctype="multipart/form-data">
          <label for="">Movie Name:</label><input class="form-control" type="text" name="name" id="">
          <label for="">Image:</label><input type="file" class="form-control" name="my_image" id="">
          <label for="">Video Link:</label><input type="text" class="form-control" name="link" id="">
          <label for="">Price:</label><select class="form-control" name="price" id="">
              <option value="0" disabled selected>Select Price</option>
              <option value="500">500</option>
              <option value="1000">1000</option>
              <option value="1500">1500</option>
          </select>
          <label for="">Description:</label><input class="form-control" name="desc" type="text">
          <input type="submit" name="submit" class="form-control bg-primary text-white">
      </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>