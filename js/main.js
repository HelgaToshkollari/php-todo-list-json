const {createApp} = Vue;
const app = createApp ({
    data(){
        return{
            tasksList: [],

        }
    },
    methods:{
        fetchTasks() {
            axios.get("api/tasks.php").then((resp) => {
              this.tasksList = resp.data;
            });
        },

    },
    mounted() {
        this.fetchTasks();
    },


}).mount("#app");