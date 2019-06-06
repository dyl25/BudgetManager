<template>
    <div class="col-sm-3"  role="alert">
        <div class="card">
            <div class="card-header">
                <img src="" class="rounded mr-2" alt="...">
                <strong class="mr-auto">{{ service }}</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close">
                <span aria-hidden="">&times;</span>
                </button>
            </div>
            <div class="card-body">
                {{ message }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [],
        data() {
            return {
                service: '',
                message: '',
            }
        },
        mounted() {
        },
        methods: {

        }
    }
</script>
