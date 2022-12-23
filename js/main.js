const {createApp} = Vue;
const app = createApp ({
    data(){
        return{
            tasksList: [],
            newtask: {}

        }
    },
    methods:{
        fetchTasks() {
            axios.get("api/tasks.php").then((resp) => {
              this.tasksList = resp.data;
            });
        },
        formSubmit(){
            axios.post("api/newtask.php", this.newtask, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then((resp) => {
                this.fetchTasks();
            });
        },

    },
    mounted() {
        this.fetchTasks();
    },


}).mount("#app");