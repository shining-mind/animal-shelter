
import modalMessage from './components/modal-message';
import { trans } from './locales';

$('#modal-form-feedback').on('submit', (e) => {
    const form = $(e.target);
    const modal = form.parents('.modal');
    const submitButton = modal.find('[type="submit"]');
    submitButton.prop('disabled', true);
    const closeModal = (callback) => {
        modalMessage.setReplacing();
        modal.one('hidden.bs.modal', () => {
            callback();
            submitButton.prop('disabled', false);
        });
        modal.modal('hide');
    };
    e.preventDefault();
    $.ajax({
        url: e.target.action,
        dataType: 'json',
        method: e.target.method,
        data: form.serializeArray(),
    })
        .done((data) => {
            e.target.reset();
            closeModal(() => {
                if (data.error) {
                    modalMessage.show(trans('failure'), data.error.message);
                } else {
                    modalMessage.show(trans('success'), data.message);
                }
            });
        })
        .fail(() => {
            closeModal(() => modalMessage.show(trans('failure'), trans('failed_to_send')));
        });
});
