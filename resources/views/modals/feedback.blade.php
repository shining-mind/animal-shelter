<x-modal :title="trans('messages.feedback')" id="modal-feedback">
    <form id="modal-form-feedback" action="{{ url('/api/feedback')}}" method="POST">
        <div class="form-group">
            <label for="feedback-email">@lang('modals.feedback_email')</label>
            <input type="text" name="email" class="form-control" id="feedback-email" aria-describedby="emailHelp" required="true">
          </div>
          <div class="form-group">
            <label for="feedback-text">@lang('modals.feedback_text')</label>
            <textarea class="form-control" id="feedback-text" name="text" rows="3" required="true"></textarea>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="feedback-accept-policy" required="true">
            <label class="form-check-label" for="feedback-accept-policy">@lang('modals.feedback_accept_policy')</label>
          </div>
    </form>
    <x-slot name="footer">
        <button type="submit" class="btn btn-primary" form="modal-form-feedback">@lang("components.modal_submit")</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang("components.modal_close")</button>
    </x-slot>
</x-modal>