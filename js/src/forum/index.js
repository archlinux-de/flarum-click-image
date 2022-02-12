import app from 'flarum/forum/app';
import ClickImage from './ClickImage';

app.initializers.add('archlinux-de/click-image', () => {
  customElements.define('click-img', ClickImage);
});
