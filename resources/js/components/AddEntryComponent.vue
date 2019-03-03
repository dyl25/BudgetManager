<template>
    <form action="" method="POST" @submit.prevent class="text-center my-4">
        <input type="hidden" name="account" v-model="account_id">

        <div class="row">
            <div class="form-group offset-md-3 col-md-5">
                <label for="amountLabel">Libellé</label>
                <div class="input-group">
                    <input v-model="label" type="text" name="amountLabel" id="amountLabel" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group offset-md-3 col-md-5">
                <label for="amount">Somme</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="prependAmount">€</span>
                    </div>
                    <input v-model="amount" type="number" name="amount" id="amount" class="form-control" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</template>

<script>
    export default {
        props: ['dataAccountId'],
        data() {
            return {
                account_id : this.dataAccountId,
                label : "",
                amount : 0
            }
        },
        methods: {
            addEntry() {
                axios.post('/api/entries/store', {
                    'account_id' : this.account_id,
                    'description' : this.label,
                    'amount' : this.amount
                })
                .then((result) => {
                    console.log(result);
                    this.entries.push();
                });
            }
        }
    }
</script>
