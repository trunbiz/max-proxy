<!DOCTYPE html>
<html lang="en">
<head>
    <title>Max-Proxy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="vh-100 container">
    <form action="{{route('proxies.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="mb-3">
                <label for="proxy" class="form-label">Proxy (IP)</label>
                <input type="text" name="proxy" class="form-control" id="proxy" placeholder="1.1.1.1:30000">
            </div>
            <div class="mb-3">
                <label for="includeUrl" class="form-label">Include api or domain</label>
                <textarea class="form-control" name="includeUrl" id="includeUrl" rows="3"
                          placeholder="xxx.abcd.com, abcd.com, *.abcd.com"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Add</button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Proxy connect</th>
            <th scope="col">IP proxy</th>
            <th scope="col">Include</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($proxys as $key => $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$ipServer}}:{{$item->port_access}}</td>
                <td>{{$item->ip}}</td>
                <td>{{$item->include}}</td>
                <td><a href='{{route('proxies.delete', ['id' => $item->id])}}' class="btn btn-dark">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
