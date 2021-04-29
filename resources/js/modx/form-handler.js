import modalMessage from '../components/modal-message';
import { trans } from '../locales';

function closeModal(modal, callback) {
    modalMessage.setReplacing();
    modal.one('hidden.bs.modal', () => {
        callback();
    });
    modal.modal('hide');
};

function handleModalFormFeedback(response) {
    const modal = response.form.parents('.modal');
    closeModal(modal, () => {
        if (response.success) {
            modalMessage.show(trans('failure'), response.message);
        } else {
            modalMessage.show(trans('success'), response.message);
        }
    });
}

$(document).on('af_complete', (event, response) => {
    const { form } = response;
    const formId = form.attr('id');
    switch (formId) {
        case 'modal-form-feedback':
            handleModalFormFeedback(response);
            break;
    }
});