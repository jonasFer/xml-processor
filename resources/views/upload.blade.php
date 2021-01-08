<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="">

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div style="text-align: center; margin-top: 50px;">
    <form method="post" action="/upload-xml-people" enctype="multipart/form-data"  class="form-inline">
        @csrf
        <div class="form-group">
            <div class="col">
                <label>XML People</label>
                <input type="file" name="xml_person" class="form-control-file" id="xml_person">
            </div>
        </div>
        <div class="form-group" style="margin-left: 50px;">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

    <form method="post" action="/upload-xml-shiporder" enctype="multipart/form-data"  class="form-inline" style="margin-top: 100px;">
        @csrf
        <div class="form-group">
            <div class="col">
                <label>XML Shiporders</label>
                <input type="file" name="xml_shiporder" class="form-control-file" id="xml_shiporder">
            </div>
        </div>
        <div class="form-group" style="margin-left: 50px;">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
