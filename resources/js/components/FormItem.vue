<template>
    <div>
        <b-form class="booking-form" @submit="onSubmit">
            <b-row>
                <b-col sm="12">
                    <b-form-input
                        id="input-1"
                        v-model="form.name"
                        placeholder="Your Name" :state="validateState('name')"
                    ></b-form-input>
                </b-col>
            </b-row>
            <b-row>
                <b-col sm="6">
                    <b-form-datepicker v-model="form.date"
                                       :date-format-options="{ year: 'numeric', month: '2-digit', day: '2-digit' }"
                                       placeholder="Pick a Date" :state="validateState('date')"
                                       required></b-form-datepicker>
                </b-col>
                <b-col sm="6">
                    <b-form-timepicker v-model="form.time" :state="validateState('time')" locale="en"
                                       placeholder="Pick a time"
                    ></b-form-timepicker>
                </b-col>
            </b-row>
            <b-row>
                <b-col sm="12">
                    <b-form-textarea
                        id="textarea"
                        v-model="form.message"
                        placeholder="Your message..."
                        rows="6" :state="validateState('message')"
                    ></b-form-textarea>
                </b-col>
            </b-row>

            <b-button type="submit" variant="dark">Place Booking</b-button>
        </b-form>
    </div>
</template>

<script>
    import {validationMixin} from "vuelidate";
    import {required, minLength} from "vuelidate/lib/validators";

    export default {
        mixins: [validationMixin],
        data() {
            return {
                form: {
                    name: null,
                    date: null,
                    time: null,
                    message: null
                },
            }
        },
        validations: {
            form: {
                date: {
                    required
                },
                message: {
                    required,
                    minLength: minLength(3)
                },
                name: {
                    required,
                    minLength: minLength(3)
                },
                time: {
                    required
                }
            }
        },

        methods: {
            validateState(name) {
                const {$dirty, $error} = this.$v.form[name];
                return $dirty ? !$error : null;
            },
            onSubmit(evt) {
                evt.preventDefault()
                this.$v.form.$touch();
                if (this.$v.form.$anyError) {
                    return;
                }
                let date = this.form.date + " " + this.form.time
                let form = {date: date, name: this.form.name, message: this.form.message}
                this.formReset()
                this.$emit("submit-form", form)
            },
            formReset() {

                // Reset our form values
                this.form.name = null
                this.form.time = null
                this.form.date = null
                this.form.message = null
                this.$v.$reset()
                // Trick to reset/clear native browser form validation state

            }
        }
    }
</script>
<style scoped>
    .row {
        margin-bottom: 15px;
    }

    .booking-form {
        margin-top: 15vh;
    }

    .form-control {
        padding: 20px;
        border: 1px solid black;
        color: black;
    }
</style>
