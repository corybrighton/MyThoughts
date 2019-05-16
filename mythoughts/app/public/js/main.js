import Apod from "./apod.js";

// HEY WHERE ARE ALL OF YOUR CONTROLLERS??
class app {
    constructor() {
        this.controllers = {
            apodCtrl: new Apod()
        }
    }
}

// @ts-ignore
window.app = new app()