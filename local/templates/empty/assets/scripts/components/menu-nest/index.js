class MenuNest {
  constructor(props) {
    this.init = props.init;
    this.wrap = document.querySelector(props.wrap);
    this.target = props.target;
    this.nest = props.nest;
    this.nestActiveClass = props.nestActiveClass;
    this.back = props.back;

    if (this.init && this.wrap) {
      this.show();
      this.close();
    }
  }

  show() {
    const targets = this.wrap.querySelectorAll(`[${this.target}]`);

    for (let i = 0; i < targets.length; i += 1) {
      targets[i].addEventListener('click', () => {
        const target = targets[i].getAttributeNode(this.target).value;
        const nest = this.wrap.querySelector(`[${this.nest}=${target}]`);
        nest.classList.add(this.nestActiveClass);
      });
    }
  }

  close() {
    const back = this.wrap.querySelectorAll(`[${this.back}]`);
    const nests = this.wrap.querySelectorAll(`[${this.nest}]`);
    for (let i = 0; i < back.length; i += 1) {
      back[i].addEventListener('click', () => {
        for (let j = 0; j < nests.length; j += 1) {
          nests[j].classList.remove(this.nestActiveClass);
        }
      });
    }
  }
}

export default MenuNest;
