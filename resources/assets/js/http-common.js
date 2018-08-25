import axios from 'axios';

export const HTTP = axios.create({
    baseURL: 'http://localhost/vue-shopping/public/',
    headers: {
        Authorization: 'Bearer {token}'
    }
})
