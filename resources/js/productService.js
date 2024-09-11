import axios from "../plugins/axios.js";

export default {
    async getProducts(){
        let response = await axios.get('/products')
        return response.data;
    },
};
