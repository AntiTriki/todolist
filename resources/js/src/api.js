const axios = window.axios;
const BASE_API_URL = 'http://localhost:8000/api'
export default{
    getAllTasks:()=>
        axios.get(`${BASE_API_URL}/tasks`),
    getOneTask:(id)=>
        axios.get(`${BASE_API_URL}/tasks/${id}/edit`),
    addTask:(post)=>
        axios.post(`${BASE_API_URL}/tasks`,task),
    updateTask:(post,id)=>
        axios.put(`${BASE_API_URL}/tasks/${id}`,task),
    deleteTask:(id) =>
        axios.delete(`${BASE_API_URL}/tasks/${id}`),
}