class ClassSwitch {
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
      wrap[i].addEventListener('click', (e) => {
        if (e.target === button) {
          wrap[i].classList.toggle(this.wrapShowClass);
        }
      });
      document.addEventListener('click', (e) => {
        if (!wrap[i].contains(e.target)) {
          wrap[i].classList.remove(this.wrapShowClass);
        }
      });
    }
  }
}

export default ClassSwitch;
