<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Queue</title>
</head>
<body>
    <div class="container">
        <!-- Content here -->
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        Laravel Cache table
                        <div class="card mt-4">
                            <div class="card-body">
                                <form class="form-inline" method="POST" action="{{ route('addcache') }}">
                                    @csrf
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input name="key" type="text" class="form-control" placeholder="Cache Key">
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input name="value" type="text" class="form-control" placeholder="Cache Value">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <form class="form-inline" method="GET" action="{{ route('getcache') }}">
                                    @csrf
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input name="key" type="text" class="form-control" placeholder="Cache Key">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Show</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (isset($data))
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        {{app('request')->input('key')}} - {{$data}}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
