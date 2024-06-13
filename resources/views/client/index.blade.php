    @extends('client.base')
    @section('title', 'Wallet')
    @section('content')
    <div class="main main-app p-3 p-lg-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
          <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Website Analytics</li>
          </ol>
          <h4 class="main-title mb-0">Welcome to Dashboard</h4>
        </div>
        <nav class="nav nav-icon nav-icon-lg">
          <a href="" class="nav-link" data-bs-toggle="tooltip" title="Share"><i class="ri-share-line"></i></a>
          <a href="" class="nav-link" data-bs-toggle="tooltip" title="Print"><i class="ri-printer-line"></i></a>
          <a href="" class="nav-link" data-bs-toggle="tooltip" title="Report"><i class="ri-bar-chart-2-line"></i></a>
        </nav>
      </div>

      <div class="card card-one mt-3">
        <div class="card-body p-3">
            <form action="{{route('proxies.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="proxyRequest" class="form-label">Proxy request</label>
                    <input type="text" class="form-control" id="proxyRequest" aria-describedby="1.1.1.1:3000" name="proxy">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div><!-- card-body -->
      </div><!-- card -->

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Proxy out</th>
                <th scope="col">Ip access</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->ip}}</td>
                    <td>{{$item->port_access}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

      <div class="main-footer mt-5">
        <span>&copy; 2023. Dashbyte. All Rights Reserved.</span>
        <span>Created by: <a href="http://themepixels.me" target="_blank">Themepixels</a></span>
      </div><!-- main-footer -->
    </div><!-- main -->
    @endsection
