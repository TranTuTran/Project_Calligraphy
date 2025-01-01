
@extends('admin.layout')

@section('content')
<div class="masonry-item w-100">
  <div class="row gap-20">

    <div class="col-md-3">
      <div class="layers bd bgc-white p-20">
        <div class="layer w-100 mB-10">
          <h6 class="lh-1">Total Users</h6>
        </div>
        <div class="layer w-100">
          <div class="peers ai-sb fxw-nw">
            <div class="peer peer-greed">
              <span id="sparklinedash"><canvas width="45" height="20" style="display: inline-block; width: 45px; height: 20px; vertical-align: top;"></canvas></span>
            </div>
            <div class="peer">
              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $totalUsers }}</span>
            </div>
          </div>
        </div>
      </div>

      <div class="layers bd bgc-white p-20">
        <a class="btn btn-success" href="{{ route('admin.user.create') }}">Create user</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="layers bd bgc-white p-20">
        <div class="layer w-100 mB-10">
          <h6 class="lh-1">Total Categories</h6>
        </div>
        <div class="layer w-100">
          <div class="peers ai-sb fxw-nw">
            <div class="peer peer-greed">
              <span id="sparklinedash2"><canvas width="45" height="20" style="display: inline-block; width: 45px; height: 20px; vertical-align: top;"></canvas></span>
            </div>
            <div class="peer">
              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{ $totalCategories }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="layers bd bgc-white p-20">
        <a class="btn btn-success" href="{{ route('admin.category.create') }}">Create category</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="layers bd bgc-white p-20">
        <div class="layer w-100 mB-10">
          <h6 class="lh-1">Total Lessonse</h6>
        </div>
        <div class="layer w-100">
          <div class="peers ai-sb fxw-nw">
            <div class="peer peer-greed">
              <span id="sparklinedash3"><canvas width="45" height="20" style="display: inline-block; width: 45px; height: 20px; vertical-align: top;"></canvas></span>
            </div>
            <div class="peer">
              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">{{ $totalLessons }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="layers bd bgc-white p-20">
        <a class="btn btn-success" href="{{ route('admin.lesson.create') }}">Create lesson</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="layers bd bgc-white p-20">
        <div class="layer w-100 mB-10">
          <h6 class="lh-1">Social posts</h6>
        </div>
        <div class="layer w-100">
          <div class="peers ai-sb fxw-nw">
            <div class="peer peer-greed">
              <span id="sparklinedash4"><canvas width="45" height="20" style="display: inline-block; width: 45px; height: 20px; vertical-align: top;"></canvas></span>
            </div>
            <div class="peer">
              <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $totalSocialPosts }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="layers bd bgc-white p-20">
        <a class="btn btn-success" href="#">View posts</a>
      </div>
    </div>
  </div>
</div>
@endsection