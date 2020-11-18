<template>
    <div>
        <button class="btn btn-primary ml-4 ptb-1" v-on:click="followUser">
            Follow
        </button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],
        mounted() {
            console.log('Component mounted.');
        },
        methods: {
            async followUser() {
                const response = await axios.post('/follow/' + this.userId);
                alert(response.data);
            }
        }
    }
</script>
