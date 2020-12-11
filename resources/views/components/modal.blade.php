<div class="modal fade" tabindex="-1" role="dialog" {{ $attributes }}>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @if (!empty($header))
                    {{ $header }}
                @else
                    <h5 class="modal-title">{{ $title }}</h5>
                @endif
            </div>
            <div class="modal-body">
            {{ $slot }}
            </div>
            <div class="modal-footer">
                @if (!empty($footer))
                    {{ $footer }}
                @else
                    <button type="button" class="btn btn-primary">{{ $submitText ? $submitText : trans("components.modal_submit") }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ !empty($close) ? $close : trans("components.modal_close") }}</button>
                @endif
            </div>
        </div>
    </div>
  </div>