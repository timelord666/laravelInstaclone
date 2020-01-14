<template>
    <div>
        <button class = "btn btn-primary ml-4" @click='followUser' v-text="buttonText"></button>
    </div>
</template>
<script>
    export default {

        props: ['userId', 'follows'],
        mounted() {
            console.log('component mounted')
        },
        data: function () {
            return {
                status: this.follows,
            }
        },
        methods: {
            followUser() {
                axios.post('/instaclone/public/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;
                        console.log(this.status);
                        
                        console.log(response.data);
                    })
                    .catch(errors => {
                        console.log(errors.response.status);
                        
                        if (errors.response.status === 401) {
                            window.location = '/instaclone/public/login';
                        }
                    });
            }
        },
        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
