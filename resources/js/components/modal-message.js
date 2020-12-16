class ModalMessage {
    constructor() {
        this.el = $('#modal-message');
        this.body = $('body');
        this.el.on('shown.bs.modal', () => {
            this.removeReplacing();
        });
        this.el.on('hidden.bs.modal', () => {
            this.el.find('.modal-title').text('');
            this.el.find('.message').text('');
        });
    }

    setReplacing() {
        this.body.addClass('modal-replacing');
    }

    removeReplacing() {
        this.body.removeClass('modal-replacing');
    }

    show(title, message) {
        this.el.find('.modal-title').text(title);
        this.el.find('.message').text(message);
        this.el.modal('show');
    }

    hide() {
        this.el.modal('hide');
    }
}


export default new ModalMessage();