<div class="form-group{{ $errors->has($field['name']) ? ' has-error' : '' }}">
  <label class="control-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  @foreach ($field['radio'] as $radio)
    <div class="i-checks"><label> <input type="radio" value="{{ $radio['value'] }}"><i></i> {{ $radio['text'] }}</label></div>
  @endforeach
</div>
