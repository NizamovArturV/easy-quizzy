class Modal {
  constructor(props) {
    this.init = props.init;
    this.modal = props.modal;
    this.modalShowClass = props.modalShowClass;
    this.target = props.target;
    this.targetId = props.targetId;
    this.close = props.close;
    this.bodyClassShow = props.bodyClassShow;
    this.removableBodyClass = props.removableBodyClass;

    if (this.init) {
      this.render();
    }
  }
  render() {
    const body = document.querySelector('body');
    const buttons = document.querySelectorAll(`[${this.target}=${this.targetId}]`);
    for (let i = 0; i < buttons.length; i += 1) {
      buttons[i].addEventListener('click', () => {
        const modal = document.querySelector(`#${buttons[i].getAttribute(this.target)}`);
        modal.classList.add(this.modalShowClass);
        body.classList.add(this.bodyClassShow);

        if (this.removableBodyClass) {
          const bodyClasses = this.removableBodyClass.split(', ');
          for (let k = 0; k < bodyClasses.length; k += 1) {
            body.classList.remove(bodyClasses[k]);
          }
        }
      });
    }

    const modal = document.querySelectorAll(this.modal);
    for (let i = 0; i < modal.length; i += 1) {
      const close = modal[i].querySelectorAll(this.close);
      modal[i].addEventListener('click', (e) => {
        if (e.target.classList.contains(this.modalShowClass)) {
          modal[i].classList.remove(this.modalShowClass);
          body.classList.remove(this.bodyClassShow);
        }
      });
      for (let j = 0; j < close.length; j += 1) {
        close[j].addEventListener('click', () => {
          modal[i].classList.remove(this.modalShowClass);
          body.classList.remove(this.bodyClassShow);
        });
      }
    }

    // console.log(modal);
    // modal.addEventListener('click', () => {
    //   modal.classList.remove('modal--show');
    // });
  }
}

export default Modal;
