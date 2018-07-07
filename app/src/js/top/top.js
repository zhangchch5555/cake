import Base from '../_base';
import Swiper from 'swiper/dist/js/swiper.min.js';
import 'swiper/dist/css/swiper.min.css';
import '../../css/top/top.css';


class Top extends Base {
    constructor(){
        super();
    }

    /**
     * dom load
     */
    domLoad(e) {
        super.domLoad();

        new Swiper('.swiper-container', {
            loop: true,
            speed: 1000,
            autoplay: true,
            pagination: {
                el: '.swiper-pagination',
            },
        });
    }

    /**
     * load
     */
    load(e) {
        super.load();
    }
}

new Top();
