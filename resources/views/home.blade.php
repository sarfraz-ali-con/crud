<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="container">
        <h1 class="text-center">CRUD Header</h1>
    </header>
    <main class="container">
        <div id="form" class="row">
            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user-name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="user-email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="user-password" placeholder="Enter your Password">
                    </div>
                    <button type="submit" class="btn btn-primary"><span style="font-size: 18px;font-weight:bold;">+</span> Create</button>
                </form>
            </div>
            <div id="data" class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sarfraz</td>
                            <td>sarfraz@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
