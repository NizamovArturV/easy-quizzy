class MenuMobile {
  constructor(props) {
    this.init = props.init;
    this.buttonSelector = document.querySelectorAll(props.buttonSelector);
    this.bodyLockClass = props.bodyLockClass;

    if (props.wrapSelector === '' || document.querySelectorAll(props.wrapSelector) === undefined || document.querySelectorAll(props.wrapSelector).length === 0) {
      this.wrapSelector = document.querySelectorAll('body');
    } else {
      this.wrapSelector = document.querySelectorAll(props.wrapSelector);
    }
    if (this.init) {
      this.render();
    }
  }

  render() {
    for (let i = 0; i < this.buttonSelector.length; i += 1) {
      this.buttonSelector[i].addEventListener('click', () => {
        for (let j = 0; j < this.wrapSelector.length; j += 1) {
          this.wrapSelector[j].classList.toggle(this.bodyLockClass);
          this.wrapSelector[j].classList.remove('search-opened');
        }
      });
    }
  }
}

export default MenuMobile;
