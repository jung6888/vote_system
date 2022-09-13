@extend('layout.layout');
@section('content')

<div class="container-fluid m-0 p-0 mx-auto rounded">
      <div
        class="rounded col-10 col-md-5 col-xl-4 m-0 py-3 px-lg-5 p-0 mx-auto bg-white"
      >
        <div class="row mx-auto m-0 p-0">
          <div class="col-6 col-md-8 col-lg-9 mx-auto m-0 p-0 p-4">
            <img src="logo.png" alt="SC-Logo" class="img-fluid" />
          </div>
        </div>
        <div class="row mx-auto m-0 p-0">
          <div class="col-12 text-center fw-bold h3">E-Election 2022-2023</div>
        </div>

        <form class="col-6 mx-auto my-3 mb-4">
          <button class="form-control btn-success" type="submit">
            Sign-in
          </button>
        </form>
      </div>
    </div>

@endsection
