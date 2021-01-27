class ShowAnswer {
  constructor(props) {
    this.init = props.init;
    this.wrap = props.wrap;
    this.wrapShowClass = props.wrapShowClass;
    this.button = props.button;

    if (this.init) {
      this.render();
    }
  }
  render() {
    const wrap = document.querySelectorAll(this.wrap);

    for (let i = 0; i < wrap.length; i += 1) {
      const button = wrap[i].querySelector(this.button);
      button.addEventListener('click', () => {
        wrap[i].classList.add(this.wrapShowClass);
      });
    }
  }
}

export default ShowAnswer;
