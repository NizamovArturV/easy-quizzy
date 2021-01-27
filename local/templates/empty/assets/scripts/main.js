import Dropdown from './components/dropdown/index';
import MenuMobile from './components/menu-mobile/index';
import Modal from './components/modal/index';
import Tabs from './components/tabs/index';
import Accordion from './components/accordion/index';
import Slider from './components/slider/index';
import ShowAnswer from './components/show-answer/index';
import ClassSwitch from './components/class-switch/index';
import ShowPass from './components/show-pass/index';
import Registration from './components/registration/index';
import MenuNest from './components/menu-nest/index';
import Cleave from 'cleave.js';
import CleavePhone from 'cleave.js/dist/addons/cleave-phone.ru';

console.log('%cMMMMMMMMMMMMMMMMMMMMMMdsN\n' +
    'MMMMMMMMMMMMMMMMMMMMNs+NM\n' +
    'MMMMMMMMMMMMMMMMMMMh/+NMM\n' +
    'MMMMMMMMMMMMMMMMMm+:/NMMM\n' +
    'MMMMMMMMMMMMMMMMo::/mMMMM\n' +
    'MMMMMMMMMMMMMNy:::/mMMMMM\n' +
    'MMMMMMMMMMMMd+---:mMMMMMM\n' +
    'MMMMMMMMMMNo----:mMMMMMMM\n' +
    'MMMMMMMMMy:----:mmmmhhysh\n' +
    'MMMMMMMd/-------:------+N\n' +
    'MMMMMmo---------------+MM\n' +
    'MMMMy:-:::/o:--------sMMM\n' +
    'MMMMNNNMMMMh--------sMMMM\n' +
    'MMMMMMMMMMs--------hMMMMM\n' +
    'MMMMMMMMMs-------:hMMMMMM\n' +
    'MMMMMMMM+--------mMMMMMMM\n' +
    'MMMMMMN+-------/mMMMMMMMM\n' +
    'MMMMMN/--------oyo+++/+mM\n' +
    'MMMMm/---------------yMMM\n' +
    'MMMm:-::::/-------:sNMMMM\n' +
    'MMMNNNMMMMo-----:sNMMMMMM\n' +
    'MMMMMMMMN/-----+mMMMMMMMM\n' +
    'MMMMMMMN/----+dMMMMMMMMMM\n' +
    'MMMMMMm:---:dMMMMMMMMMMMM\n' +
    'MMMMMd/::/yMMMMMMMMMMMMMM\n' +
    'MMMMd::/yMMMMMMMMMMMMMMMM\n' +
    'MMMh::oNMMMMMMMMMMMMMMMMM\n' +
    'MMy:omMMMMMMMMMMMMMMMMMMM\n' +
    'My+mMMMMMMMMMMMMMMMMMMMMM\n' +
    'yhMMMMMMMMMMMMMMMMMMMMMMM', 'color: #F9E730; font-size:12px;');

const headerDropdown = new Dropdown({
  init: true,
  wrap: '.dropdown-cities',
  wrapActive: 'dropdown-cities--active',
  button: '.dropdown-cities__button',
});
const menuMobile = new MenuMobile({
  init: true,
  buttonSelector: '[data-menu-mobile]',
  bodyLockClass: 'menu-mobile-opened',
  wrapSelector: '', // default body
});
const gameTabs = new Tabs({
  init: true,
  wrap: '[data-tabs-wrap]',
  tab: '[data-tab]',
  target: 'data-tab',
  block: '[data-block]',
  blockId: 'data-block',
  buttonActiveClass: 'game-tab--active',
  blockActiveClass: 'coming__block--active',
});
const gameAccordion = new Accordion({
  init: true,
  wrapSelector: '.game-accordion',
  buttonSelector: '.game-accordion__ticket',
  activeClass: 'game-accordion--show',
  rollSelector: '.game-accordion__roll',
});
const sliderTabs = new Slider({
  init: true,
  wrap: '.slider-tabs',
  slider: '[data-tab-slider]',
  prev: '.slider-tabs__arrow--left',
  next: '.slider-tabs__arrow--right',
  options: {
    slidesPerView: 3,
    loop: false,
    followFinger: false,
    simulateTouch: false,
    speed: 800,
    navigation: {
      disabledClass: 'slider-tabs__arrow--disable',
      hiddenClass: 'slider-tabs__arrow--hidden',
    },
    breakpoints: {
      1400: {
        followFinger: true,
        simulateTouch: true,
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 1,
      },
    },
  },
});
const sliderGallery = new Slider({
  init: true,
  wrap: false,
  slider: '.slider-gallery',
  prev: '.slider-gallery__arrow--prev',
  next: '.slider-gallery__arrow--next',
  options: {
    slidesPerView: 1,
    loop: true,
    speed: 400,
    effect: 'fade',
    navigation: {
      disabledClass: 'slider-tabs__arrow--disable',
      hiddenClass: 'slider-tabs__arrow--hidden',
    },
  },
});
const modalCities = new Modal({
  init: true,
  modal: '.modal--cities',
  modalShowClass: 'modal--show',
  target: 'data-modal',
  targetId: 'modalCities',
  close: '[data-close]',
  bodyClassShow: 'modal-opened-mobile',
  removableBodyClass: 'menu-mobile-opened',
});
const modalVideo = new Modal({
  init: true,
  modal: '.modal--video',
  modalShowClass: 'modal--show',
  target: 'data-modal',
  targetId: 'modalVideo',
  close: '[data-close]',
  bodyClassShow: 'modal-opened',
  removableBodyClass: 'menu-mobile-opened',
});
const modalRules = new Modal({
  init: true,
  modal: '.modal--rules',
  modalShowClass: 'modal--show',
  target: 'data-modal',
  targetId: 'modalRules',
  close: '[data-close]',
  bodyClassShow: 'modal-opened',
  removableBodyClass: 'menu-mobile-opened',
});
const modalMap = new Modal({
  init: true,
  modal: '.modal--map',
  modalShowClass: 'modal--show',
  target: 'data-modal',
  targetId: 'modalMap',
  close: '[data-close]',
  bodyClassShow: 'modal-opened',
  removableBodyClass: 'menu-mobile-opened',
});
const modalAdding = new Modal({
  init: true,
  modal: '.modal--adding',
  modalShowClass: 'modal--show',
  target: 'data-modal',
  targetId: 'modalAdding',
  close: '[data-close]',
  bodyClassShow: 'modal-opened',
  removableBodyClass: 'menu-mobile-opened',
});
const modalAccordion = new Accordion({
  init: true,
  wrapSelector: '.modal-reg__block',
  buttonSelector: '.modal-reg__collapse',
  activeClass: 'modal-reg__block--show',
  rollSelector: '.modal-reg__roll',
});
const regModal = new Modal({
  init: true,
  modal: '.modal-reg',
  modalShowClass: 'modal-reg--show',
  target: 'data-modal',
  targetId: 'modalReg',
  close: '[data-close]',
  bodyClassShow: 'modal-opened',
  removableBodyClass: 'menu-mobile-opened',
});
const showAnswer = new ShowAnswer({
  init: true,
  wrap: '.info__answer',
  wrapShowClass: 'info__answer--show',
  button: '.info__button',
});
const classSwitch = new ClassSwitch({
  init: true,
  wrap: '.team__options',
  wrapShowClass: 'team__options--show',
  button: '.team__dots',
});
const teamAccordion = new Accordion({
  init: true,
  wrapSelector: '.team',
  buttonSelector: '.team__collapse',
  activeClass: 'team--show',
  rollSelector: '.team__list',
});
const gamesAccordion = new Accordion({
  init: true,
  wrapSelector: '.table-games',
  buttonSelector: '.table-games__collapse',
  activeClass: 'table-games--show',
  rollSelector: '.table-games__list',
});
const showPass = new ShowPass({
  init: true,
  wrap: '.password',
  button: '.password__button',
  buttonShowClass: 'password__button--show',
  field: '.input',
});
const modalTabs = new Tabs({
  init: true,
  wrap: '.modal-reg__frame',
  tab: '[data-tab]',
  target: 'data-tab',
  block: '[data-block]',
  blockId: 'data-block',
  buttonActiveClass: 'modal-reg__tab--active',
  blockActiveClass: 'modal-reg__block--active',
});
const dateInput = document.querySelectorAll('.input--date');
const registration = new Registration({
  init: true,
  wrap: '.persons',
  button: '.persons__button',
  buttonActiveClass: 'persons__button--active',
  buttonDisabledClass: 'persons__button--disabled',
  selectSelector: '.persons__select',
  dataValue: 'data-value',
  checkBox: '[data-checkbox]',
});
const profileDropdown = new Dropdown({
  init: true,
  wrap: '.profile-dropdown',
  wrapActive: 'profile-dropdown--show',
  button: '.profile-dropdown__button',
});
const menuNest = new MenuNest({
  init: true,
  wrap: '.menu-mobile',
  target: 'data-target-menu-mobile',
  nest: 'data-menu-mobile-content',
  nestActiveClass: 'menu-mobile__sub--active',
  back: 'data-menu-mobile-back',
});


for (let i = 0; i < dateInput.length; i += 1) {
  const input = new Cleave(dateInput[i], {
    date: true,
    delimiter: '.',
    datePattern: ['d', 'm', 'Y'],
  });
}

const datePhone = document.querySelectorAll('.input--phone');
for (let i = 0; i < datePhone.length; i += 1) {
  const input = new Cleave(datePhone[i], {
    phone: true,
    phoneRegionCode: 'RU',
  });
}


require.context('../../assets/images', true, /\.(png|jpe?g|gif)$/);
