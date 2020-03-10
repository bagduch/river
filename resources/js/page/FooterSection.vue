<template>
    <footer class="footer">
        <div class="container">
            <b-row>
                <b-col sm="4">
                    <div class="footer-logo"><a href="https://weareriver.nz" class="logo-a"><img
                        src="/images/company/logo.svg" alt="RIVER"></a></div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                    <div @click="bookNow" class="footer-button">Book Now</div>
                </b-col>
                <b-col sm="8">
                    <b-row>
                        <b-col>
                            <div class="menu-title">Menu</div>
                            <div class="menu-content">
                                <ul>
                                    <li>Heading</li>
                                </ul>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="menu-title">Menu</div>
                            <div class="menu-content">
                                <ul>
                                    <li>Heading</li>
                                </ul>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="menu-title">Menu</div>
                            <div class="menu-content">
                                <ul>
                                    <li>Heading</li>
                                </ul>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="menu-title">Menu</div>
                            <div class="menu-content">
                                <ul>
                                    <li>Heading</li>
                                </ul>
                            </div>
                        </b-col>

                    </b-row>
                </b-col>
            </b-row>
            <p class="copy-right">© 2019 RIVER. All Rights Reserved.</p>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "FooterSection",
        methods: {
            bookNow() {
                this.$emit('book-now')
            }
        }
    }
</script>

