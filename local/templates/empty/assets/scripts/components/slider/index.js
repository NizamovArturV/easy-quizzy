import Swiper from 'swiper/dist/js/swiper.min';

class Slider {
  constructor(props) {
    this.init = props.init;
    this.wrap = props.wrap;
    this.slider = props.slider;
    this.options = props.options;
    this.prev = props.prev;
    this.next = props.next;
    if (this.init) {
      this.render();
    }
  }

  render() {
    const slidersList = [];
    if (this.wrap) {
      const optionsArray = [];
      const slidersWrap = document.querySelectorAll(this.wrap);
      for (let i = 0; i < slidersWrap.length; i += 1) {
        const slider = slidersWrap[i].querySelector(this.slider);
        optionsArray[i] = {};
        for (const key in this.options) {
          optionsArray[i][key] = this.options[key];
        }
        optionsArray[i].navigation.prevEl = slidersWrap[i].querySelectorAll(this.prev);
        optionsArray[i].navigation.nextEl = slidersWrap[i].querySelectorAll(this.next);
        slidersList[i] = new Swiper(slider, optionsArray[i]);
      }
    } else {
      const optionsArray = [];
      const sliders = document.querySelectorAll(this.slider);
      for (let i = 0; i < sliders.length; i += 1) {
        optionsArray[i] = {};
        for (const key in this.options) {
          optionsArray[i][key] = this.options[key];
        }
        optionsArray[i].navigation.prevEl = sliders[i].querySelectorAll(this.prev);
        optionsArray[i].navigation.nextEl = sliders[i].querySelectorAll(this.next);
        slidersList[i] = new Swiper(sliders[i], this.options);
      }
    }
  }
}

export default Slider;
