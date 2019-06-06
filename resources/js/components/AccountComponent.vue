<template>
    <div :class="{'border-success': account.is_positif, 
        'border-danger': !account.is_positif}" class="card mb-3">
        <div class="card-body text-center">
            <h5 class="card-title">{{ account.description }}</h5>
            <p class="card-text display-4">
                <a :href="url">{{ account.total }} €</a>
            </p>
            <p class="card-text">créé le {{ account.created_at }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: [dataAccount, dataUrl],
    date() {
        return {
            account: this.dataAccount,
            url: this.dataUrl
        }
    },
    mounted() {
        
    },
    methods: {
        
    }
}
</script>
