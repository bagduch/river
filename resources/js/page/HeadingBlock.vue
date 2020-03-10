<template>
    <div class="page-container">
        <grid-item :config="sectionOne.config">
            <div slot="left">
                <content-item :data="sectionOne" v-on:footer-action="bookNow"></content-item>
            </div>
        </grid-item>
    </div>
</template>

<script>
    import GridItem from "../components/GridItem"
    import ContentItem from "../components/ContentItem";

    export default {
        name: "HeadingBlock",
        components: {ContentItem, GridItem},
        data() {
            return {
                sectionOne: {
                    config: {left: 7, right: 5},
                    barTop: "110px",
                    pageNum: "01",
                    title: "heading",
                    subtitle: "",
                    content: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.",
                    footer: {
                        enable: true,
                        button: "Book Now"
                    }
                }
            }
        },
        methods: {
            bookNow() {
                this.$emit('book-now')
            }
        },
        created() {

        }

    }
</script>
