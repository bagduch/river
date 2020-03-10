<template>
    <div class="page-container">
        <grid-item :config="sectionOne.config">
            <div slot="left">
                <content-item :data="sectionOne" v-on:footer-action="bookNow"></content-item>
            </div>
            <div slot="right">
                <form-item ref="formItem" v-on:submit-form="onSubmit"></form-item>
            </div>
        </grid-item>
    </div>
</template>
<script>
    import GridItem from "../components/GridItem"
    import ContentItem from "../components/ContentItem";
    import FormItem from "../components/FormItem";

    export default {
        name: "BookingForm",
        components: {FormItem, ContentItem, GridItem},
        data() {
            return {
                sectionOne: {
                    config: {left: 6, right: 6},
                    barTop: "110px",
                    pageNum: "03",
                    title: "heading",
                    subtitle: "",
                    content: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.",
                    footer: {
                        enable: false,
                    }
                }
            }
        },
        methods: {
            bookNow() {

            },
            onSubmit(form) {
                this.$emit("book-form", form)
            }
        },
        created() {

        }

    }
</script>
