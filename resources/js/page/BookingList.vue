<template>
    <div class="booking-list-container">
        <div class="container">
            <b-row>
                <b-col :sm="6" v-for="item in bookings">
                    <booking-item :data="item"></booking-item>
                </b-col>
            </b-row>
        </div>
    </div>
</template>

<script>
    import BookingItem from "../components/BookingItem";

    export default {
        name: "BookingList",
        components: {BookingItem},
        props: ['bookings']
    }
</script>
