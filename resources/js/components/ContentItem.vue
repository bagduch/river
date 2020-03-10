<template>
    <div class="content-item-container">
        <div class="split-bar" :style="top"></div>
        <div class="item-header">
            <div class="section-number">{{data.pageNum}}</div>
            <div v-if="data.title" class="title">
                <h1>{{data.title}}</h1>
            </div>
            <div v-if="data.subtitle" class="sub-title">
                <h2>{{data.subtitle}}</h2>
            </div>

        </div>
        <div class="item-body">
            <p>{{data.content}}</p>
        </div>
        <div v-if="data.footer.enable" class="item-footer">
            <b-button @click="footerAction">{{data.footer.button}}</b-button>
        </div>
    </div>
</template>
<script>
    export default {
        name: "ContentItem",
        props: ["data"],
        computed: {
            top() {
                return "top:calc(7vh + " + this.data.barTop + ")";
            }
        },
        methods: {
            footerAction() {
                this.$emit('footer-action');
            }
        }
    }
</script>

