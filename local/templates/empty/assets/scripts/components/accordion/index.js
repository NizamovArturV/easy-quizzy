class Accordion {
  constructor(props) {
    this.init = props.init;
    this.wrapSelector = props.wrapSelector;
    this.buttonSelector = props.buttonSelector;
    this.activeClass = props.activeClass;
    this.rollSelector = props.rollSelector;
    if (this.init) {
      this.render();
    }
  }
  render() {
    const wrap = document.querySelectorAll(this.wrapSelector);
    for (let i = 0; i < wrap.length; i += 1) {
      const button = wrap[i].querySelector(this.buttonSelector);
      const content = wrap[i].querySelector(this.rollSelector);
      window.addEventListener('resize', () => {
        this.setHeight(i, content);
      });
      this.setHeight(i, content);
      button.addEventListener('click', () => {
        wrap[i].classList.toggle(this.activeClass);
        this.setHeight(i, content);
      });
    }
  }
  setHeight(index, content) {
    const wrap = document.querySelectorAll(this.wrapSelector);
    if (wrap[index].classList.contains(this.activeClass)) {
      content.style.maxHeight = `${content.scrollHeight}px`;
    } else {
      content.style.maxHeight = null;
    }
  }
}

export default Accordion;
