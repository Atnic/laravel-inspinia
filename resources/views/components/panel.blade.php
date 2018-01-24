<div class="ibox">
  @if(isset($header) || isset($title))
  <div class="ibox-title">
    @if(isset($header))
    {{ $header }}
    @else
    <h5>{{ $title }}</h5>
    @isset($tools)
    <div class="ibox-tools">
      {{ $tools }}
    </div>
    @endisset
    @endif
  </div>
  @endif
  <div class="ibox-content">
    {{ !empty($body) ? $body : $slot }}
  </div>
  @isset($footer)
  <div class="ibox-footer">
    {{ $footer }}
  </div>
  @endisset
</div>
