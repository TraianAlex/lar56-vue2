import Errors from './errors.es6';

export default class Form {
    constructor(data) {
        this.originalData = data;
        for (let field in data) {
            this[field] = data[field];
        }
        this.errors = new Errors()
    }
    data(){
        let data = Object.assign({},this);
        delete data.originalData;
        delete data.errors;

        return data;
    }

    reset() {
        for(let field in this.originalData){
            this[field]='';
        }
    }

    submit(type, url){
        axios[type](url, this.data())
            .then(this.onSuccess.bind(this))
            .catch(this.onFail.bind(this));
    }

    onSuccess(response){
        alert(response.data.message);
        this.errors.clear();
        this.reset();
    }

    onFail(error){
        this.errors.record(error.response.data.errors);
    }
}