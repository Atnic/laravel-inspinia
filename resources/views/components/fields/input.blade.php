<div class="form-group{{ $errors->has($field['name']) ? ' has-error' : '' }}">
  <label class="control-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <input type="{{ !empty($field['type']) ? $field['type'] : 'text' }}" class="form-control" name="{{ $field['name'] }}" value="{{ old($field['name'], isset($model) ? $model->{$field['name']} : null) }}"{{ !empty($field['required']) ? 'required' : '' }}>
  @if ($errors->has($field['name']))
  <span class="help-block">{{ $errors->first($field['name']) }}</span>
  @endif
</div>
