<template>
    <div class="booking-item-container">
        <div class="item-header">
            <div class="section-number">{{number}}</div>

            <div class="sub-title">
                <h2>{{data.name}} <br>{{date}}<br> {{time}}</h2>
            </div>

        </div>
        <div class="item-body">
            <div class="split-bar"></div>
            <p>{{data.message}}</p>
        </div>

    </div>
</template>
<script>
    export default {
        name: "BookingItem",
        props: ["data"],
        computed: {
            number() {
                return ('0' + this.data.id).slice(-2)
            },
            date() {
                const date = new Date(this.data.date);
                return date.toLocaleString('en-US', {year: 'numeric', month: 'long', day: 'numeric'});
            },
            time() {
                const date = new Date(this.data.date);
                return date.toLocaleTimeString('en-US', {hour: '2-digit', minute: '2-digit', hour12: 'true'});
            }
        }

    }
</script>

