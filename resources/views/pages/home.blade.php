@extends('layouts.main')

@section('title', 'Health Insurance Results')

@section('content')
    <section class="first">
        <div class="firstIn center">
            <div class="firstLeft">
                <div class="firstTitle title">Health Plans<br/> For Your Budget</div>
                <div class="firstText text">Every year the high cost of health care and health insurance contributes to
                    financial hardship for millions of
                    Americans. Compass Health Consultants will provide you with options for reliable health insurance
                    protection, at prices
                    to fit within your budget.
                </div>
                <div class="firstButton">
                    <a href="{{ route('contact') }}#form" class="button">Contact us now</a>
                </div>
            </div>
            <div class="firstRight">
                <div class="firstCircles">
                    <div class="firstCircle one translateOnMouseMove" data-animateSpeed="20">
                        <video id="video" width="100%" src="/media/intro.m4v" type="video/mp4"></video>
                    </div>
                    <div class="firstCircle two translateOnMouseMove" data-animateSpeed="25"></div>
                    <div class="firstCircle three translateOnMouseMove" data-animateSpeed="10"></div>
                    <div class="firstCircle fourt translateOnMouseMove" data-animateSpeed="5"></div>
                    <div class="firstCircle five translateOnMouseMove" data-animateSpeed="7"></div>
                    <div class="firstButton playButton">
                        <a id="playNow" href="#" class="button">Play now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="secondCircle three translateOnMouseMove" data-animateSpeed="25"></div>
        <div class="secondIn center">
            <div class="secondLeft">
                <div class="secondCircles">
                    <div class="secondCircle one translateOnMouseMove" data-animateSpeed="20"></div>
                    <div class="secondCircle two translateOnMouseMove" data-animateSpeed="10"></div>
                </div>
            </div>
            <div class="secondRight">
                <div class="secondTitle title">Health Insurance<br/> Specialists</div>
                <div class="secondText text">
                    The healthcare landscape is constantly changing. One only has to turn on the evening news to realize
                    healthcare and health insurance is evolving with each new passing day. <br/>You deserve to have
                    someone solely focused on finding the best healthcare solutions for you and your family.<br/> At
                    Compass Health Consultants , we are an independent agency representing America's best healthcare
                    plans. <br/>Our clients have access to over 200 insurance plans, and <br/> our broad portfolio
                    enables us to design a customized program to fit your specific needs and challenges. ​
                </div>
            </div>
        </div>
    </section>
    <section class="third">

        <div class="thirdIn center">
            <div class="thirdTitle title">Quotes</div>
            <div class="thirdItems">
                <a href="https://my.timetrade.com/book/5QZLL" target="_blank" class="thirdItem rotateOnMouseMove"
                   data-animateSpeed="100">
                    <div class="thirdImage">
                        <img src="/images/heart.svg" alt="">
                    </div>
                    <div class="thirdItemTitle">
                        Health <br/>Insurance
                    </div>
                    <span class="button thirdButton">Book now</span>
                </a>
                <a href="https://my.timetrade.com/book/RV5QS" target="_blank" class="thirdItem rotateOnMouseMove"
                   data-animateSpeed="100">
                    <div class="thirdImage">
                        <img src="/images/medicaments.svg" alt="">
                    </div>
                    <div class="thirdItemTitle">
                        Medicare <br/>Supplements
                    </div>
                    <span class="button thirdButton">Book now</span>
                </a>
                <a href="https://my.timetrade.com/book/5QZLL" target="_blank" class="thirdItem rotateOnMouseMove"
                   data-animateSpeed="100">
                    <div class="thirdImage">
                        <img src="/images/heart2.svg" alt="">
                    </div>
                    <div class="thirdItemTitle">
                        Term Life <br/>Insurance
                    </div>
                    <span class="button thirdButton">Book now</span>
                </a>
            </div>
        </div>
    </section>
    <section class="fourth">
        <div class="fourthCircle one translateOnMouseMove" data-animateSpeed="25"></div>
        <div class="fourthIn center">
            <div class="fourthLeft">
                <div class="fourthTitle title">We Offer Dozens <br/>of Insurance <br/>Solutions</div>
                <div class="fourthText text">Compass Health Consultants has access to dozens of insurance plans,
                    allowing us to find the best solution and price for your family. You deserve good protection at a
                    price you can afford.
                </div>
                <div class="fourthButton">
                    <a href="{{ route('contact') }}#form" class="button">Contact us now</a>
                </div>
            </div>
            <div class="fourthRight">
                <div class="fourthSlider">
                    <div class="marquee">
                        <div class="marquee__inner" aria-hidden="true">
                            <a href="https://www.aetna.com/individuals-families.html" target="_blank"
                               class="fourthSliderItem">
                                <img src="images/seventh1.png" alt="">
                            </a>
                            <a href="https://www.ameritas.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh2.png" alt="">
                            </a>
                            <a href="https://www.bcbs.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh3.png" alt="">
                            </a>
                            <a href="https://www.uhc.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh4.png" alt="">
                            </a>
                            <a href="https://www.imglobal.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh5.png" alt="">
                            </a>
                            <a href="https://www.manhattanlife.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh6.png" alt="">
                            </a>
                            <a href="https://www.mutualofomaha.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh7.png" alt="">
                            </a>
                            <a href="https://nationalgeneral.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh8.png" alt="">
                            </a>
                            <a href="https://www.pivothealth.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh9.png" alt="">
                            </a>
                            <a href="https://www.aetna.com/individuals-families.html" target="_blank"
                               class="fourthSliderItem">
                                <img src="images/seventh1.png" alt="">
                            </a>
                            <a href="https://www.ameritas.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh2.png" alt="">
                            </a>
                            <a href="https://www.bcbs.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh3.png" alt="">
                            </a>
                            <a href="https://www.uhc.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh4.png" alt="">
                            </a>
                            <a href="https://www.imglobal.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh5.png" alt="">
                            </a>
                            <a href="https://www.manhattanlife.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh6.png" alt="">
                            </a>
                            <a href="https://www.mutualofomaha.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh7.png" alt="">
                            </a>
                            <a href="https://nationalgeneral.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh8.png" alt="">
                            </a>
                            <a href="https://www.pivothealth.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh9.png" alt="">
                            </a>
                            <a href="https://www.aetna.com/individuals-families.html" target="_blank"
                               class="fourthSliderItem">
                                <img src="images/seventh1.png" alt="">
                            </a>
                            <a href="https://www.ameritas.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh2.png" alt="">
                            </a>
                            <a href="https://www.bcbs.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh3.png" alt="">
                            </a>
                            <a href="https://www.uhc.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh4.png" alt="">
                            </a>
                            <a href="https://www.imglobal.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh5.png" alt="">
                            </a>
                            <a href="https://www.manhattanlife.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh6.png" alt="">
                            </a>
                            <a href="https://www.mutualofomaha.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh7.png" alt="">
                            </a>
                            <a href="https://nationalgeneral.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh8.png" alt="">
                            </a>
                            <a href="https://www.pivothealth.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh9.png" alt="">
                            </a>
                            <a href="https://www.aetna.com/individuals-families.html" target="_blank"
                               class="fourthSliderItem">
                                <img src="images/seventh1.png" alt="">
                            </a>
                            <a href="https://www.ameritas.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh2.png" alt="">
                            </a>
                            <a href="https://www.bcbs.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh3.png" alt="">
                            </a>
                            <a href="https://www.uhc.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh4.png" alt="">
                            </a>
                            <a href="https://www.imglobal.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh5.png" alt="">
                            </a>
                            <a href="https://www.manhattanlife.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh6.png" alt="">
                            </a>
                            <a href="https://www.mutualofomaha.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh7.png" alt="">
                            </a>
                            <a href="https://nationalgeneral.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh8.png" alt="">
                            </a>
                            <a href="https://www.pivothealth.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh9.png" alt="">
                            </a>
                            <a href="https://www.aetna.com/individuals-families.html" target="_blank"
                               class="fourthSliderItem">
                                <img src="images/seventh1.png" alt="">
                            </a>
                            <a href="https://www.ameritas.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh2.png" alt="">
                            </a>
                            <a href="https://www.bcbs.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh3.png" alt="">
                            </a>
                            <a href="https://www.uhc.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh4.png" alt="">
                            </a>
                            <a href="https://www.imglobal.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh5.png" alt="">
                            </a>
                            <a href="https://www.manhattanlife.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh6.png" alt="">
                            </a>
                            <a href="https://www.mutualofomaha.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh7.png" alt="">
                            </a>
                            <a href="https://nationalgeneral.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh8.png" alt="">
                            </a>
                            <a href="https://www.pivothealth.com/" target="_blank" class="fourthSliderItem">
                                <img src="images/seventh9.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="fourthList">
                    <li><span>Individual Health Insurance</span></li>
                    <li><span>Medicare Supplements​</span></li>
                    <li><span>Group Health Insurance</span></li>
                    <li><span>Cancer / Critical Illness</span></li>
                    <li><span>Prescription Coverage</span></li>
                    <li><span>Life Insurance</span></li>
                    <li><span>Accident / Disability</span></li>
                    <li><span>​Long Term Care</span></li>
                    <li><span>​24/7 Telemedicine​​</span></li>
                    <li><span>Disability Insurance​​</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="fiveth">
        <div class="fivethIn center">
            <div class="fivethTitle title">Reviews</div>
            <div class="fivethItems" id="reviewsSlider">
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="3000">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Bob Bierman</div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">Christina‌ ‌was‌ ‌very‌ ‌nice‌ ‌and‌ ‌easy‌ ‌to‌ ‌work‌ ‌with.‌ ‌She‌
                            ‌found‌ ‌a‌ ‌plan‌ ‌that‌ ‌worked‌ ‌well‌ ‌for‌ ‌me‌ ‌at‌ ‌a‌ ‌
                            reasonable‌ ‌price.‌ ‌She‌ ‌explained‌ ‌all‌ ‌my‌ ‌options‌ ‌and‌ ‌answered‌ ‌my‌
                            ‌questions‌ ‌clearly.‌ ‌Highly‌ ‌
                            recommended.‌
                        </div>
                    </div>
                    <div class="fivethItemBottom">5 months ago</div>
                </div>
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="300">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Debra Rush</div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">Christina is nice, quick to respond and super helpful! Makes dealing
                            with insurance less frustrating.
                        </div>
                    </div>
                    <div class="fivethItemBottom">5 months ago</div>
                </div>
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="300">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Jody Clark Jones</div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">Christina was very thorough, patient, and understanding. She found
                            insurance tailored to specific needs for 2019 and then again for the current year. Highly
                            recommended.
                        </div>
                    </div>
                    <div class="fivethItemBottom">8 months ago</div>
                </div>
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="300">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Merlin Varner</div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">Great people that work for you! Very rare these days...</div>
                    </div>
                    <div class="fivethItemBottom">9 months ago</div>
                </div>
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="300">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Marie Schliemann</div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">Christina was very good at checking every possibly plan there was to
                            get. thanks so much for taking the time to review his coverage which we found out he should
                            stay with what he got.
                        </div>
                    </div>
                    <div class="fivethItemBottom">9 months ago</div>
                </div>
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="300">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Donna Winholt
                            </div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">Christina started as a agent for my husband several years ago. My
                            husband always thought very highly of Christina, as she was always very helpful towards him
                            and directing him with a health care plan to cover his medical issues. After my husband
                            passed away and I retired, Christina became my agent also. I must say that Christina has
                            been extremely helpful and very patient with me as I do not understand all of the insurance
                            choices that need to be made. I would highly recommend Christina to anyone looking for
                            assistance with health care needs.
                        </div>
                    </div>
                    <div class="fivethItemBottom">10 months ago</div>
                </div>
                <div class="fivethItem rotateOnMouseMove" data-animateSpeed="300">
                    <div class="fivethItemTop">
                        <div class="fivethInfo">
                            <div class="fivethName">Tenelle Recto
                            </div>
                            <div class="fivethRating"></div>
                        </div>
                        <div class="fivethText">I talked to Christina Hessel a few years back when I was looking for an
                            affordable insurance and she shared with me multiple plans and helped me decided what would
                            be the perfect fit based on my needs. Well she has done an excellent job over the past few
                            years keeping me insured at a reasonable price. Even though at times, I am not understanding
                            my policy, that is where Christina has stepped in to explain or help me with the insurance
                            companies process my claims. She is more than helpful, she treats you like if this was her
                            own policy and wants to be sure you get claims processed. I am very grateful for Christina
                            and would recommend anyone that is look for an insurance policy.
                        </div>
                    </div>
                    <div class="fivethItemBottom">10 months ago</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom-scripts')
    <script>
        let play = false;
        let video = document.getElementById('video');
        let playBtn = document.getElementById('playNow')
        playBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if(!play){
                video.play();
                playBtn.innerHTML = 'Pause';
                play = true;
            }
            else{
                video.pause();
                playBtn.innerHTML = 'Play now';
                play = false;
            }

        });
    </script>
@endpush
