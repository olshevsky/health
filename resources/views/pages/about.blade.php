@extends('layouts.main')

@section('title', 'Health Insurance Results - About Us')

@section('content')
    <section class="innerFirst deleteOnMobile">
        <div class="innerFirstImage">
            <img src="images/about_image.jpg" alt="">
        </div>
        <h1 class="innerFirstTitle">About us</h1>
    </section>
    <section class="innerSecond">
        <div class="innerSecondIn center">
            <div class="innerSecondLeft">
                <div class="innerSecondCircles">
                    <div class="innerSecondCircle one translateOnMouseMove" data-animateSpeed="20"></div>
                    <div class="innerSecondCircle two translateOnMouseMove" data-animateSpeed="25"></div>
                    <div class="innerSecondCircle three translateOnMouseMove" data-animateSpeed="30"></div>
                    <div class="innerSecondCircle fourt translateOnMouseMove" data-animateSpeed="15"></div>
                </div>
            </div>
            <div class="innerSecondRight">
                <div class="innerSecondTitle title">About us</div>
                <div class="innerSecondText text">Compass Health Consultants serves in an advisory role with our health insurance clients.<br />
                    We represent the most stable and highest rated companies in the insurance industry. Names like United Healthcare, Aetna, Blue Cross & Blue Shield, and Mutual of Omaha.  Because we are independent, we can direct you to the health plans the best meet your needs and budget.  All of our consultations are done over the telephone and online, and no agent will ever ask to visit your home. </div>
                <div class="innerSecondButton">
                    <a href="{{ route('contact') }}" class="button">Contact us now</a>
                </div>
            </div>
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
                <a href="https://my-schedule.timetrade.com/app/td-682723/workflows/rv5qs/schedule/welcome?wfsid=16a5bdb5-baba97f6-16a5be04-baba97f6-00000002-ohqid17tdkavmevrirjevc8mhdj1dfvm&view=full&fs=1" target="_blank" class="button">Book now</a>
            </div>
        </div>
    </section>
@endsection
