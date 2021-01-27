class ShowPass {
  constructor(props) {
    this.init = props.init;
    this.wrap = props.wrap;
    this.button = props.button;
    this.buttonShowClass = props.buttonShowClass;
    this.field = props.field;

    if (this.init) {
      this.render();
    }
  }
  render() {
    const wrap = document.querySelectorAll(this.wrap);
    for (let i = 0; i < wrap.length; i += 1) {
      const button = wrap[i].querySelector(this.button);
      const input = wrap[i].querySelector(this.field);
      button.addEventListener('click', () => {
        if (input.type === 'password') {
          input.type = 'text';
          button.classList.add(this.buttonShowClass);
        } else {
          input.type = 'password';
          button.classList.remove(this.buttonShowClass);
        }
      });
    }
  }
}

export default ShowPass;
