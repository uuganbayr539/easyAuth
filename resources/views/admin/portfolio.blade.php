@extends('admin.adminhome')
@section('content')
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Portfolio Slide</h4>
      <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
        <div class="item">
          <img src="admin/assets/images/dashboard/Rectangle.jpg" alt="">
        </div>
        <div class="item">
          <img src="admin/assets/images/dashboard/Img_5.jpg" alt="">
        </div>
        <div class="item">
          <img src="admin/assets/images/dashboard/img_6.jpg" alt="">
        </div>
      </div>
      <div class="d-flex py-4">
        <div class="preview-list w-100">
          <div class="preview-item p-0">
            <div class="preview-thumbnail">
              <img src="admin/assets/images/faces/face12.jpg" class="rounded-circle" alt="">
            </div>
            <div class="preview-item-content d-flex flex-grow">
              <div class="flex-grow">
                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                  <h6 class="preview-subject">CeeCee Bass</h6>
                  <p class="text-muted text-small">4 Hours Ago</p>
                </div>
                <p class="text-muted">Well, it seems to be working now.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="text-muted">Well, it seems to be working now. </p>
      <div class="progress progress-md portfolio-progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
</div>
@endsection