<textarea name="{{ $name }}{{ $name_a }}" class="form-control {{ $class }} @if($size)input-{{ $size }}@endif" id="{{ $id }}" {!! $params !!}>{{ $value or null }}</textarea>