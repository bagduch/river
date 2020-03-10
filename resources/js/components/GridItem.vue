<template>
    <b-container>
        <b-row>
            <b-col :sm="item.left">
                <slot name="left"></slot>
            </b-col>
            <b-col :sm="item.right">
                <slot name="right"></slot>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        name: "GridItem",
        props: ['config'],
        data() {
            return {
                item: {
                    left: 6,
                    right: 6
                }
            }
        },
        created() {
            if (typeof this.config !== "undefined") {
                this.item = this.config
            }
        }

    }
</script>
