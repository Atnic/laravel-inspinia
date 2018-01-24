<div class="ibox">
  <div class="ibox-title" style="padding:0px">
    <ul class="nav nav-tabs">
      {{ $nav_tabs }}
    </ul>
    <div class="tab-content">
      {{ !empty($tab_panes) ? $tab_panes : $slot }}
    </div>
  </div>
</div>
