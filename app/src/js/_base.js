export default class Base {
    constructor() {
        this.setEvent();
    }

    /**
     * event set
     * */
    setEvent() {
        window.addEventListener('DOMContentLoaded',(e) => {
            this.domLoad(e);
    });
        window.addEventListener('load',(e) => {
            this.load(e);
        });
    }

    /**
     * dom load
     * */
    domLoad(e) {
    }

    /**
     * load
     * */
    load(e) {
    }
}