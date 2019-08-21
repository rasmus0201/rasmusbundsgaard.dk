<template>
    <section class="section full-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <h1 class="display-3 mb-3">Referencer</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div v-for="(reference, index) in Bundsgaard.references" :key="index" class="col-lg-4 col-md-6 col-sm-12 reference">
                    <span class="img" :style="{ 'background-image': 'url(' + reference.url + ')' }"></span>
                    <span class="text">
                        <span class="title" v-html="reference.title"></span>
                        <span class="subtitle" v-html="reference.subtitle"></span>
                    </span>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row" v-for="(recommendation, index) in Bundsgaard.recommendations" :key="index">
                <div class="col-md-12 mb-4">
                    <b-button tag="a" :href="recommendation.url" target="_blank" :block="true" :rounded="true" class="py-3">
                        Se anbefaling fra {{ recommendation.name }}
                    </b-button>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {}
</script>
