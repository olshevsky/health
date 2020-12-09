@extends('layouts.main')

@section('title', 'Health Insurance Results - Contact Us')

@section('content')
    <section class="innerFirst">
        <div class="innerFirstImage">
            <img src="images/contact_image.jpg" alt="">
        </div>
        <h1 class="innerFirstTitle">Contact us</h1>
    </section>
    <section class="innerForm">
        <div class="innerFormCircle one translateOnMouseMove" data-animateSpeed="16"></div>
        <div class="innerFormCircle two translateOnMouseMove" data-animateSpeed="10"></div>
        <div class="innerFormCircle three translateOnMouseMove" data-animateSpeed="14"></div>
        <div class="innerFormCircle four translateOnMouseMove" data-animateSpeed="22"></div>
        <div class="innerFormIn center" id="form">
            <div class="innerFormTitle title">Explore Your Options</div>
            <div class="innerFormSubtitle text">Please share some brief information so that we may better serve you.</div>
            <form @submit="checkForm" action="{{ route('sendContact') }}" method="POST">
                @csrf
                <div class="innerFormGroup">
                    <input type="text" name="name" v-model="form.name" placeholder="First Name" :class="[errors.name ? 'error' : '']">
                    <input type="text" name="lastName" v-model="form.lastName" placeholder="Last Name" :class="[errors.lastName ? 'error' : '']">
                </div>
                <p v-if="errors.name" class="errorMessage">First name is required!</p>
                <p v-if="errors.lastName" class="errorMessage">Last name is required!</p>
                <input type="email" name="email" v-model="form.email" :class="[errors.email ? 'error' : '']" placeholder="Email">
                <p v-if="errors.email" class="errorMessage">Incorrect email adress!</p>
                <input type="phone" name="phone" v-model="form.phone" :class="[errors.phone ? 'error' : '']"  placeholder="Phone Number">
                <p v-if="errors.phone" class="errorMessage">Incorrect phone number!</p>
                <input type="text" name="zip" v-model="form.zip" placeholder="Zipcode">
                <div class="innerFormCheckboxes">
                    @foreach ($subjects as $id => $subject)
                        <label class="innerFormCheckbox">
                            <input type="checkbox" name="subjects{{ $id }}" v-model="form.subjects" value="{{ $subject }}">
                            <div class="phantom"></div>
                            <span>{{ $subject }}</span>
                        </label>
                    @endforeach
                </div>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="innerFormIn">
                    <p v-if="status === 'ok'" class="statusMessage success">Your message has been sent successfully!</p>
                    <p v-if="status === 'fail'" class="statusMessage fail">Something went wrong!</p>
                </div>
                <div class="innerFormButton">
                    <button class="button">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <section class="innerThird">
        <div class="innerThirdCircle one translateOnMouseMove" data-animateSpeed="16"></div>
        <div class="innerThirdCircle two translateOnMouseMove" data-animateSpeed="10"></div>
        <div class="innerThirdCircle three translateOnMouseMove" data-animateSpeed="14"></div>
        <div class="innerThirdCircle four translateOnMouseMove" data-animateSpeed="22"></div>
        <div class="innerThirdIn center">
            <div class="innerThirdTitle title">Our 2 step strategy </div>
            <div class="innerThirdSubtitle text">We prefer a simple 2 step online / telephone based strategy to determine our best health plan recommendations for your family. And our service is FREE to you. </div>
            <div class="innerThirdItems">
                <div class="innerThirdLine translateOnMouseMove" data-animateSpeed="50">
                    <img src="/images/line.svg" alt="">
                </div>
                <div class="innerThirdItem">
                    <div class="left translateOnMouseMove" data-animateSpeed="50">
                        1
                        <div class="shadow translateOnMouseMove" data-animateSpeed="40">1</div>
                    </div>
                    <div class="right">We gather some basic information about you and you healthcare needs. Your age, marital status, and will you be providing coverage for children or dependents? We discuss what kind of coverage you have now and what kind of coverage is important to you. And we'll always look for ways to save you money, if possible.</div>
                </div>
                <div class="innerThirdItem">
                    <div class="left translateOnMouseMove" data-animateSpeed="50">
                        2
                        <div class="shadow translateOnMouseMove" data-animateSpeed="40">2</div>
                    </div>
                    <div class="right">We'll create a custom proposal based on your specific needs and concerns, usually with multiple quotes for you to compare. Then we'll arrange a subsequent telephone appointment to discuss our recommendations. With multiple insurance companies and available plans, our goal is to provide you with at least 2 or 3 different plan options to consider, designed around your needs and budget. If you have pre-existing health conditions, we can direct you to the best coverage options for your particular situation.  </div>
                </div>
            </div>
            <div class="innerThirdButton">
                <a href="https://my.timetrade.com/book/5QZLL" target="_blank" class="button">Book now</a>
            </div>
        </div>
    </section>
@endsection

@push('custom-scripts')
    <script>
        let contactForm = new Vue({
            el: '#form',
            data: {
                errors: {
                    name: false,
                    lastName: false,
                    email: false,
                    phone: false
                },
                isValid: false,
                status: null,
                form: {
                    name: null,
                    lastName: null,
                    email: null,
                    phone: null,
                    zip: null,
                    subjects: [],
                    _token: "{{ csrf_token() }}",
                },
            },
            methods: {
                checkForm: function(e){
                    e.preventDefault();
                    this.resetErrors();
                    if (!this.validate())
                        return;

                    let self = this;
                    axios.post('{{ route("sendContact") }}', this.form)
                        .then((res) => {
                            if(res.data.status === 'ok'){
                                self.status = 'ok';
                            }
                            self.resetErrors();
                            self.clearForm();
                        })
                        .catch((error) => {
                            self.status = 'fail';
                        }).finally(() => {});
                },
                validate: function(){
                    if (this.form.name === null || this.form.name.length < 1){
                        this.errors.name = true;
                        return false;
                    }

                    if (this.form.lastName === null || this.form.lastName.length < 1){
                        this.errors.lastName = true;
                        return false;
                    }

                    if (!this.validEmail(this.form.email)){
                        this.errors.email = true;
                        return false;
                    }

                    if(!this.validPhone(this.form.phone)){
                        this.errors.phone = true;
                        return false;
                    }

                    return true;
                },
                resetErrors: function() {
                    this.errors = {
                        email: false,
                        phone: false
                    }
                },
                clearForm: function(){
                     this.form = {
                        name: null,
                        lastName: null,
                        email: null,
                        phone: null,
                        zip: null,
                        subjects: [],
                        _token: "{{ csrf_token() }}",
                     }
                },
                validEmail: function (email) {
                    let reg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return reg.test(email);
                },
                validPhone: function(phone){
                    let reg = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
                    return reg.test(phone);
                }
            }
        });
    </script>
@endpush
