@php
  $alert = session('alert');
@endphp
<div class="modal show d-block">
  <div class="modal-dialog position-absolute top-50 start-50 translate-middle" style="width: 30em;">
    <div class="modal-content">
      <div class="modal-header bg-{{ $alert['type'] }} text-black">
        <h2 class="modal-title fs-4">{{$alert['title']}}</h2>
        <a href="" type="button" class="btn-close btn-close-white"></a>
      </div>
      <div class="modal-body">
        <p>{{ $alert['content'] }}</p>
      </div>
      <div class="modal-footer">
        <a href="{{ url()->current() }}" class="btn btn-{{ $alert['type'] }}">OK</a>
      </div>
    </div>
  </div>
</div>