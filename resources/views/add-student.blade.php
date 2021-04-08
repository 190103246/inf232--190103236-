<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<section style="padding-top:60px;">

<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
    Add New Student
</div>
<div class="card-body">
@if(Session::has('student_added'))
<div class="alert alert-success" role="alert">
  {{Session::get('student_added')}}
</div>
@endif
    <form method="Post" action="{{route('student.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
    <label for="name">Name-Surname</label>
    <input type="text" name="name" class="form-control"/>
    </div>

    <div class="form-group">
    <label for="file">Choose Profile Image</label>
    <input type="file" name="file" class="form-control" onchange="previewFile(this)" />
    <img id="previewImg" alt="profile image" style="max-width:130px;margin-top:20px;"/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
</div>
</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


<script>
function previewFile(input){
    var file=$("input[type=file]").get(0).files[0];
    if(file)
    {
        var reader = new FileReader();
        reader.onload=function(){
            $('#previewImg').attr("src",reader.result);
        }
        reader.readAsDataURL(file);
    }
}
</script>
</body>
</html>