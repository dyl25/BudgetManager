<template>
    <form @submit.prevent="addEntry" class="text-center my-4 jumbotron">
        <input type="hidden" name="account" v-model="form.account_id">

        <div class="row">
            <div class="form-group offset-md-3 col-md-5">

                <label for="amountLabel">Libellé</label>
                <div class="input-group">
                    <input v-model="form.description" :class="{ 'border-danger' : errors.description }" type="text" name="amountLabel" id="amountLabel" class="form-control" required>
                </div>
                <p v-if="errors.description" v-text="errors.description[0]" class="text-danger"></p>

            </div>
        </div>

        <div class="row">
            <div class="form-group offset-md-3 col-md-5">

                <label for="amount">Somme</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="prependAmount">€</span>
                    </div>
                    <input v-model.number="form.amount" type="number" step="0.01" name="amount" id="amount" class="form-control" :class="{ 'border-danger' : errors.amount }" required>
                </div>
                <p v-if="errors.amount" v-text="errors.amount[0]" class="text-danger"></p>

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
                form: {
                    account_id : this.dataAccountId,
                    description : '',
                    amount : 0
                },
                errors: {}
            }
        },
        methods: {
            addEntry() {
                axios.post('/api/entries/store', this.form)
                .then(({data}) => {
                    this.$emit('newEntry', data);
                    this.form.description = "";
                    this.form.amount = 0;
                    this.errors = {};
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    this.$emit('notify', {service: 'Entry', message: 'Error!!!'});
                });
            }
        }
    }
</script>
