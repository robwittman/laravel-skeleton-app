var axios = require('axios');

const Api = {
    token: null,

    service: axios.create(),

    getToken: function(params) {
        return this.service.post('/api/token', params);
    },
    setToken: function(token) {
        this.token = token;
        this.service = axios.create({
            headers: {
                'Authorization': 'Bearer '+this.token
            }
        })
    }
}

export default Api;
