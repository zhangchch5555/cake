import Base from '../_base';
import '../../css/top/top.css';


export default class Top extends Base {
    constructor(){
        super();
    }

    /**
     * dom load
     */
    domLoad(e) {
        super.domLoad();
        console.log("this top dom load");
    }

    /**
     * load
     */
    domLoad(e) {
        super.domLoad();
        console.log("this top load");
    }
}
