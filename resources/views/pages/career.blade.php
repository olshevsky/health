@extends('layouts.main')

@section('title', 'Health Insurance Results - Career')

@section('content')
    <section class="innerFirst">
        <div class="innerFirstImage">
            <img src="images/career_image.jpg" alt="">
        </div>
        <h1 class="innerFirstTitle">Career</h1>
    </section>
    <section class="innerVideo">
        <div class="innerVideoTop">
            <div class="left">
                <img src="/images/footer_logo.png" width="100%" alt="">
            </div>
            <div class="right">Welcome<br />
                to your <br />
                Last Career</div>
        </div>
        <div class="innerVideoBottom">
            <div class="innerVideoButton left"></div>
            <div class="innerVideoItems">
                <div class="innerVideoItem">
                    <iframe src='https://www.youtube.com/embed/acIRsZg_eqU?version=3&enablejsapi=1&controls=0&rel=0'
                            width='100%' height="100%">
                    </iframe>
                </div>
                <div class="innerVideoItem">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/9uRZ2J97bts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </iframe>
                </div>
            </div>
            <div class="innerVideoButton right"></div>
        </div>
    </section>
    <section class="third inner">

        <div class="thirdIn">
            <div class="thirdItems noShadow">
                <a href="#" target="_blank" class="thirdItem inPage">

                    <div class="thirdItemTitle">
                        Your Success
                    </div>
                    <div class="thirdImage">
                        <img src="/images/career1.svg" alt="">
                    </div>
                    <div class="thirdText innerPage">
                        Want a change in 2021? Ready to be your own boss and enjoy the flexibility to live life the way you choose? Do you want to work your own schedule and get paid what you feel you are worthwhile helping others?<br /> <br />

                        If you want a change, reach out to me! Message me, text me or call me. I CAN TRAIN ANYONE who has the HEART and the DRIVE to succeed. I will guide you, mentor you, and do my best to motivate and inspire you..but I will not babysit anybody. I'm looking for grown adults who are not afraid to roll up their sleeves and grind their way to a $100,000 salary in year one and double, triple or quadruple that in year 2 and beyond. I'm okay with people who are scared or nervous, but if you are timid or faint of heart, this is probably not the right opportunity for you.<br /> <br />

                        I am living proof that a six-figure income is absolutely real and possible in this industry. I am a partner with the company which means I now share in the company profits. That's a sweet place to be. I do not do what I do for the money alone, but it is certainly a significant benefit that I will gladly discuss with you if you have the courage and confidence to follow your dreams.
                    </div>
                    <span class="button thirdButton">Read more</span>
                </a>
                <a href="#" target="_blank" class="thirdItem inPage">

                    <div class="thirdItemTitle">
                        Meet our Team
                    </div>
                    <div class="thirdImage">
                        <img src="/images/career2.svg" alt="">
                    </div>
                    <div class="thirdText innerPage">
                        We’re Compass Health Consultants in partnership with Healthcare Solutions Team.<br /> <br />

                        ​

                        We’re a nationwide team of optimists, health care problem solvers and medical insurance advocates. We’re a passionate blend of resourcefulness,

                        compassion and drive.<br /> <br />



                        We’re a crew of true believers. And we’re committed to helping families, individuals and groups get the absolute best health insurance coverage for their unique needs.<br /> <br />

                        ​

                        Find out why we are on Inc. 5000’s Fastest Growing Companies list 3 years in a row, Crain’s Fast Fifty list and rated an A+ with the Better Business Bureau as complaint free!

                    </div>
                    <span class="button thirdButton">Read more</span>
                </a>
                <a href="#" target="_blank" class="thirdItem inPage">

                    <div class="thirdItemTitle">
                        The Fun Stuff
                    </div>
                    <div class="thirdImage">
                        <img src="/images/career3.svg" alt="">
                    </div>
                    <div class="thirdText innerPage">
                        "America's #1 Health Insurance Agency 3 Years Running"- Assurant Health<br />

                        -"A+ Rating & Complaint Free Award" Better Business Bureau<br />

                        -"Fast 50 Honoree with 934% Growth" Crain's Chicago Business<br />

                        -"America's #1 Fastest Growing Career Health Insurance Brokerage" Inc. 5000<br />

                        -Represent a variety of insurance products, not just one<br />

                        -Complete training and proven support system is already in place<br />

                        -Exclusive leads<br />

                        -Cutting edge technology FREE<br />

                        -Work from our office or from your home office<br />

                        -Sales can be done over the phone and online<br /> - residual income

                        Freedom to sell nationwide, no territory restrictions

                        -Weekly advance commissions<br />

                        -Renewal commissions for long-term income<br />

                        -PART TIME. FULL TIME. Or BIG TIME.<br />
                        <br /><br />
                        <div class="thirdItemTitle">RESPONSIBILITIES:</div>

                        This position is responsible for providing service to clients’ changing insurance needs by selling health, dental, life and supplemental insurance products.

                        Skills/Qualifications: Must be dedicated to the cause. Must crave work/life balance. Must want to be a part of something big!


                    </div>
                    <span class="button thirdButton">Read more</span>
                </a>

            </div>
        </div>
    </section>
    <section class="innerForm noShadow">
        <div class="innerFormCircle one translateOnMouseMove" data-animateSpeed="16"></div>
        <div class="innerFormCircle two translateOnMouseMove" data-animateSpeed="10"></div>
        <div class="innerFormCircle three translateOnMouseMove" data-animateSpeed="14"></div>
        <div class="innerFormCircle four translateOnMouseMove" data-animateSpeed="22"></div>
        <div class="innerFormIn center">
            <div class="innerFormTitle title">Job Application</div>
            <div class="innerFormSubtitle text">Please share some information and connect with our recruiters to learn more today.</div>
            <form id="form" @submit="checkForm" action="{{ route('careerApply') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="innerFormGroup">
                    <input type="text" name="name" v-model="form.name" placeholder="First Name">
                    <input type="text" name="lastName" v-model="form.lastName" placeholder="Last Name">
                </div>
                <input type="email" name="email" v-model="form.email" :class="[errors.email ? 'error' : '']" placeholder="Email">
                <p v-if="errors.email" class="errorMessage">Incorrect email adress!</p>
                <input type="phone" name="phone" v-model="form.phone" :class="[errors.phone ? 'error' : '']"  placeholder="Phone Number">
                <p v-if="errors.phone" class="errorMessage">Incorrect phone number!</p>
                <input type="text" name="zip" v-model="form.zip" placeholder="Zipcode">
                <div class="cv">
                    <textarea v-model="form.info"  placeholder="Adittional Information" name="info" id="info" cols="30" rows="10"></textarea>
                    <div class="file">
                        <div class="title">Upload your CV</div>
                        <label class="upload">
                            <div class="image">
                                <img src="/images/upload.svg" width="100%" alt="">
                            </div>
                            <div class="text">Drop your files
                                here</div>
                            <input ref="file" v-on:change="handleFileUpload()" type="file" id="file" name="file">
                        </label>
                    </div>
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
@endsection

@push('custom-scripts')
    <script>
        let contactForm = new Vue({
            el: '#form',
            data: {
                errors: {
                    email: false,
                    phone: false
                },
                isValid: false,
                status: null,
                form: {
                    name: '',
                    lastName: '',
                    email: '',
                    phone: '',
                    zip: '',
                    info: '',
                    file: null,
                    _token: "{{ csrf_token() }}",
                },
            },
            methods: {
                handleFileUpload: function(){
                    this.form.file = this.$refs.file.files[0];
                },
                checkForm: function(e){
                    e.preventDefault();
                    this.resetErrors();

                    if (!this.validEmail(this.form.email)){
                        this.errors.email = true;
                        return;
                    }

                    if(!this.validPhone(this.form.phone)){
                        this.errors.phone = true;
                        return;
                    }

                    let self = this;
                    let formData = new FormData();
                        formData.append('name', this.form.name);
                        formData.append('lastName', this.form.lastName);
                        formData.append('email', this.form.email);
                        formData.append('phone', this.form.phone);
                        formData.append('zip', this.form.zip);
                        formData.append('info', this.form.info);
                        if(this.form.file !== null)
                            formData.append('file', this.form.file);
                        formData.append('_token', "{{ csrf_token() }}");

                    axios.post('{{ route("careerApply") }}', formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
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
