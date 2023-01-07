<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../cms/img/sirjohnlogo.png" rel="icon">
  <title>Logo - Updates</title>
  <link href="../cms/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../cms/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../cms/css/ruang-admin.min.css" rel="stylesheet">
  <link href="../cms/css/custom.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  @foreach ($header as $hd)
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Update Business Logo and Name</h1>
                  </div>
                  <form class="user" action="/updateLogoAndName" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="id" value="{{$hd->id}}" hidden>
                      <input type="file" class="form-control" name="logo" id="file" placeholder="Choose file">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputText" name="bizname" value="{{$hd->name}}" placeholder="Business Name">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Update changes</button>
                    </div>
                    <hr>
                    <div class="form-group">
                      <br>
                      <a href="/Admin-Crousel" class="btn btn-danger btn-block">Back</a>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- Login Content -->
  <script src="../cms/vendor/jquery/jquery.min.js"></script>
  <script src="../cms/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../cms/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../cms/js/ruang-admin.min.js"></script>
</body>

</html>