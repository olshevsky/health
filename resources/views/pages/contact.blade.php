@extends('layouts.main')

@section('title', 'Health Insurance Results - Contact U')

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
            <form action="{{ route('sendContact') }}" method="POST" enctype="multipart/form-data">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="innerFormGroup">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="First Name">
                    <input type="text" name="lastName" value="{{ old('lastName') }}" placeholder="Last Name">
                </div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                <input type="phone" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                <input type="text" name="zip" value="{{ old('zip') }}" placeholder="Zipcode">
                <div class="innerFormCheckboxes">
                    <label class="innerFormCheckbox">
                        <input type="checkbox" name="topic">
                        <div class="phantom"></div>
                        <span>Health Insurance</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Dental/Vision</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Group Health Insurance - Business</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Accident/Disability</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Medicare Supplements</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Cancer</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Long Term Care</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Life Insurance</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>Prescription Coverage</span>
                    </label>
                    <label class="innerFormCheckbox">
                        <input type="checkbox">
                        <div class="phantom"></div>
                        <span>International Health Insurance</span>
                    </label>
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
