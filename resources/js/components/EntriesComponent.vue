<template>
    <div>

        <div class="alert alert-success" v-for="entry in entries" :key="entry.id">
            <h5 class="alert-heading">{{ entry.description }} - <span class="text-muted">{{entry.created_at}}</span></h5>
            <p>{{ entry.amount }} €</p>
            <button class="btn btn-outline-danger" @click="deleteEntry(entry.id)">Supprimer</button>
        </div>

        <entry-form :data-account-id="this.dataAccountId" @newEntry="entries.push($event)"></entry-form>

    </div>
</template>

<script>
    import EntryFormComponent from './EntryFormComponent.vue';

    export default {
        components: { 'entry-form' : EntryFormComponent },
        props: ['dataAccountId'],
        data() {
            return {
                entries: [],
            }
        },
        mounted() {
            this.getEntries();
        },
        methods: {
            getEntries() {
                axios.get(`/api/account/entries/${this.dataAccountId}`)
                .then(({data}) => {
                    console.log(data);
                    this.entries = data;
                });
            },
            deleteEntry(id) {
                console.log(id);
                axios.delete('/api/entries/' + id);

                this.entries = this.entries.filter(entry => entry.id !== id);

            }
        }
    }
</script>
