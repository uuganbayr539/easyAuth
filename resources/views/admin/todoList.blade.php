@extends('admin.adminhome')
@section('content')
    <div class="col-md-12 col-xl-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">To do list</h4>
      <div class="add-items d-flex">
        <input type="text" class="form-control todo-list-input" placeholder="enter task..">
        <button class="add btn btn-primary todo-list-add-btn">Add</button>
      </div>
      <div class="list-wrapper">
        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
          <li>
            <div class="form-check form-check-primary">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox"> Create invoice </label>
            </div>
            <i class="remove mdi mdi-close-box"></i>
          </li>
          <li>
            <div class="form-check form-check-primary">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
            </div>
            <i class="remove mdi mdi-close-box"></i>
          </li>
          <li class="completed">
            <div class="form-check form-check-primary">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
            </div>
            <i class="remove mdi mdi-close-box"></i>
          </li>
          <li>
            <div class="form-check form-check-primary">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
            </div>
            <i class="remove mdi mdi-close-box"></i>
          </li>
          <li>
            <div class="form-check form-check-primary">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
            </div>
            <i class="remove mdi mdi-close-box"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection