<template>
    <div class="page-container">
        <grid-item :config="sectionOne.config">
            <div slot="left">
                <b-img src="/images/image-water@2x.png" fluid alt="Fluid image"></b-img>
            </div>
            <div slot="right">
                <content-item :data="sectionOne"></content-item>
            </div>
        </grid-item>
    </div>
</template>

<script>
    import GridItem from "../components/GridItem"
    import ContentItem from "../components/ContentItem";

    export default {
        name: "ImageBlock",
        components: {ContentItem, GridItem},
        data() {
            return {
                sectionOne: {
                    config: {left: 7, right: 5},
                    barTop: "40px",
                    pageNum: "02",
                    title: "",
                    subtitle: "Lorem ipsum dolor sit amet, consetetur.",
                    content: "",
                    footer: {
                        enable: false,

                    }
                }
            }
        },
        created() {

        }

    }
</script>
