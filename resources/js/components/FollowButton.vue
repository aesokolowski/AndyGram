<template>
    <div>
        <button class="btn btn-primary ml-4 ptb-1"
                v-on:click="followUser"
                v-text="buttonText">     
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            userId: Number,
            follows: String,
        },
        mounted() {
            console.log('Component mounted.');
            console.log(this.userId);
            console.log(this.follows);
        },
        methods: {
            async followUser() {
                const response = await axios.post('/follow/' + this.userId);
                console.log(response.data);
            }
        },
        computed: {
            buttonText() {
                return (this.follows === 'BOOL_TRUE') ? 'Unfollow' : 'Follow';
            }
        }
    };
</script>
