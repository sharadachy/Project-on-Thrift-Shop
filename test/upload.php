<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Image Upload</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Upload Product Image</h2>
    <form id="uploadForm" enctype="multipart/form-data">
      <div class="form-group">
        <label for="image">Select Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <div id="uploadStatus"></div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function(){
      $('#uploadForm').submit(function(e){
        e.preventDefault(); // Prevent form submission
        var formData = new FormData(this);

        $.ajax({
          url: 'upload.php', // Change this to the endpoint that handles file upload
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response){
            $('#uploadStatus').html('<div class="alert alert-success" role="alert">Image uploaded successfully!</div>');
            // Optionally, do something with the response from the server
          },
          error: function(xhr, status, error){
            $('#uploadStatus').html('<div class="alert alert-danger" role="alert">Error uploading image: ' + error + '</div>');
          }
        });
      });
    });
  </script>
</body>
</html>
