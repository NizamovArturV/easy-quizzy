class Tabs {
  constructor(props) {
    this.init = props.init;
    this.wrap = props.wrap;
    this.tab = props.tab;
    this.target = props.target;
    this.block = props.block;
    this.blockId = props.blockId;
    this.buttonActiveClass = props.buttonActiveClass;
    this.blockActiveClass = props.blockActiveClass;

    if (this.init) {
      this.render();
    }
  }

  render() {
    const wrap = document.querySelectorAll(this.wrap);
    if (!wrap) {
      return;
    }
    for (let i = 0; i < wrap.length; i += 1) {
      const tabs = wrap[i].querySelectorAll(this.tab);
      const blocks = wrap[i].querySelectorAll(this.block);
      for (let j = 0; j < tabs.length; j += 1) {
        tabs[j].addEventListener('click', () => {
          const targetElement = tabs[j].getAttribute(this.target);
          for (let k = 0; k < tabs.length; k += 1) {
            if (k === j) continue;
            tabs[k].classList.remove(this.buttonActiveClass);
          }

          tabs[j].classList.add(this.buttonActiveClass);
          for (let k = 0; k < blocks.length; k += 1) {
            blocks[k].classList.remove(this.blockActiveClass);
          }
          wrap[i].querySelector(`[${this.blockId}=${targetElement}]`).classList.add(this.blockActiveClass);
        });
      }
    }
  }
}

export default Tabs;
