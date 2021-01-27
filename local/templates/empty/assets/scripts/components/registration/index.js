class Registration {
  constructor(props) {
    this.init = props.init;
    this.wrap = props.wrap;
    this.button = props.button;
    this.selectSelector = props.selectSelector;
    this.buttonActiveClass = props.buttonActiveClass;
    this.buttonDisabledClass = props.buttonDisabledClass;
    this.dataValue = props.dataValue;
    this.checkBox = props.checkBox;

    if (this.init) {
      this.render();
    }
  }
  render() {
    const wrap = document.querySelectorAll(this.wrap);

    for (let i = 0; i < wrap.length; i += 1) {
      const select = wrap[i].querySelector(this.selectSelector);
      const buttons = wrap[i].querySelectorAll(this.button);
      const checkbox = wrap[i].querySelector(this.checkBox);

      select.addEventListener('change', () => {
        this.removeActive(buttons);
        const activeButton = wrap[i].querySelector(`[${this.dataValue}= "${select.value}"]`);
        activeButton.classList.add(this.buttonActiveClass);
        (select.selectedIndex === 7) ? checkbox.disabled = true : checkbox.disabled = false;
      });
      checkbox.addEventListener('change', () => {
        if (checkbox.checked === true) {
          buttons[7].classList.add(this.buttonDisabledClass);
          buttons[7].disabled = true;
          select.options[7].disabled = true;
        } else {
          buttons[7].classList.remove(this.buttonDisabledClass);
          buttons[7].disabled = false;
          select.options[7].disabled = false;
        }
      });

      for (let j = 0; j < buttons.length; j += 1) {
        buttons[j].addEventListener('click', () => {
          this.removeActive(buttons);
          buttons[j].classList.add(this.buttonActiveClass);
          select.selectedIndex = buttons[j].getAttribute(this.dataValue) - 2;
          const evt = new Event('change');
          select.dispatchEvent(evt);
        });
      }
    }
  }

  removeActive(buttons) {
    for (let i = 0; i < buttons.length; i += 1) {
      buttons[i].classList.remove(this.buttonActiveClass);
    }
  }
}

export default Registration;
