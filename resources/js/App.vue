<template>
    <div id="app">
        <hero></hero>
        <heading-block v-on:book-now="scrollToForm"></heading-block>
        <image-block></image-block>
        <notifications group="foo"/>
        <booking-form ref="bookForm" v-on:book-form="createBooking"></booking-form>
        <booking-list :bookings="bookings"></booking-list>
        <footer-section v-on:book-now="scrollToForm"></footer-section>
    </div>
</template>

<script>

    import Hero from "./page/Hero";
    import HeadingBlock from "./page/HeadingBlock";
    import ImageBlock from "./page/ImageBlock";
    import BookingForm from "./page/BookingForm";
    import FooterSection from "./page/FooterSection";
    import BookingList from "./page/BookingList";

    export default {
        name: 'home',
        components: {
            BookingList,
            FooterSection,
            BookingForm,
            ImageBlock,
            HeadingBlock,
            Hero,

        },

        data() {
            return {
                bookings: null,
                dismissSecs: 3,
                dismissCountDown: 0,
                showDismissibleAlert: false

            }
        },
        methods: {


            scrollToForm() {
                var element = this.$refs.bookForm;
                var top = element.$el.offsetTop;
                window.scrollTo(0, top);
            },
            createBooking(form) {
                axios.post('/booking', form).then(r => {
                    this.$notify({
                        type: 'success',
                        group: 'foo',
                        title: 'Booking Added',
                        text: 'Thanks ' + form.name + '! Booking Successful added!'
                    });
                    this.bookings.push(r.data.data)
                }).catch(err => {
                    this.$notify({
                        type: 'warn',
                        group: 'foo',
                        title: 'error',
                        text: ' Booking Failed added!'
                    });
                });
            }
        },

        created() {
            axios.get('booking').then(r => {
                this.bookings = r.data.data
            }).catch(err => {

            });
        }
    }
</script>
