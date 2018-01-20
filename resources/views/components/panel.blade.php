<div class="ibox float-e-margins">
  @isset($header)
  <div class="ibox-title">
    {{ $header }}
  </div>
  @endisset
  <div class="ibox-content">
    {{ !empty($body) ? $body : $slot }}
  </div>
  @isset($footer)
  <div class="ibox-footer">
    {{ $footer }}
  </div>
  @endisset
</div>
