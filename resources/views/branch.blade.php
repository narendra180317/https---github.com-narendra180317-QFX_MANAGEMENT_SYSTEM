<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Branch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="post" action="{{ route('branch.create') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"/>
                        <label>Location</label>
                        <input type="text" name="location" class="form-control"/>
                        <label>Manager_Name</label>
                        <input type="text" name="manager_name" class="form-control"/>
                        <label>Manager_ID</label>
                        <input type="number" name="manager_id" class="form-control"/>
                        <button type="submit" class="btn btn-primary mt-5">Create</button>
                    </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>