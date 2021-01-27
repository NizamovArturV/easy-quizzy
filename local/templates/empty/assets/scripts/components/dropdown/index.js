class Dropdown {
  constructor(props) {
    this.init = props.init;
    this.wrap = props.wrap;
    this.wrapActive = props.wrapActive;
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
          wrap[i].classList.toggle(this.wrapActive);
        }
      });
      document.addEventListener('click', (e) => {
        if (!wrap[i].contains(e.target)) {
          wrap[i].classList.remove(this.wrapActive);
        }
      });
    }
  }
}
export default Dropdown;
