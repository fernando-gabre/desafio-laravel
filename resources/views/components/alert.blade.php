@if(session()->has('error'))
  <span class="alert alert-danger" id="message-error">{{session('error')}}</span>
@elseif(session()->has('success'))
  <span class="alert alert-success" id="message-success">{{session('success')}}</span>
@endif
