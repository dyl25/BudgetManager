<template>
    <div>
        <account 
            v-for="account in accounts" 
            :data-account="account" 
            :key="account.id"
        ></account>
    </div>
</template>

<script>
import AccountComponent from "./AccountComponent.vue";

export default {
    components: { AccountComponent },
    date() {
        return {
            accounts: []
        }
    },
    mounted() {
        this.getAccounts();
    },
    methods: {
        getAccounts() {
            axios.get('/api/accounts')
                .then(({data}) => {
                    this.accounts = data;
                });
        }
    }
}
</script>
