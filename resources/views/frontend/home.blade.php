@extends('frontend.layouts.master')
@section('title', 'Quiz Machine')
@section('main-content')
    <!-- main section start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-md-6 col-sm-6 col-xs-6"></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-md-66 col-sm-12 col-xs-12">
                    <div class="mt-3">
                        <form class="form-inline my-2 my-lg-0">
                           <div class="d-flex">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- left-side bar start -->
                <div class="col-xl-2 col-lg-2 col-md-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="mt-4">
                        <p class="navbar-font">Levels</p>
                    </div>
                    <div class="d-flex">
                        <div class="side-bar-font mt-1">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                        </div>
                        <div class="check_box_font">
                            <span> A1 Basic</span>
                            <span> A2 Foundation</span>
                            <span> B1 Intermediate</span>
                            <span> B2 Moderate</span>
                            <span> C1 Advance</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="navbar-font">Subject</p>
                    </div>
                    <div class="d-flex">
                        <div class="side-bar-font mt-1">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                            <input type="checkbox" class="check_box">
                        </div>
                        <div class="check_box_font">
                            <span> Vocabulary</span>
                            <span> Grammar</span>
                            <span> Reading</span>
                            <span> Listening</span>
                            <span> Writing</span>
                        </div>
                    </div>
                </div>
                <!-- left-side bar end -->
                <div class="col-xl-10 col-lg-10 col-md-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="mt-4">
                        <h1 class="fw-bolder">Prepare for your English exam</h1>
                        <p class="main-text">On test-english.com you will find lots of free practice tests and materials to help you improve your English skills and be more prepared for your English exam: KEY (KET), PET, FCE, IELTS, TOEIC® and TOEFL iBT™. If you don't know your level, you can start by taking a Level Test.</p>
                    </div>
                    <div>
                        <button class="large-button">Assess your level</button>
                    </div>
                    <!-- service section start -->
                    <div class="service">
                        <div class="mt-5">
                            <h3 class="fw-bolder">What would you like to practise today?</h3>
                        </div>
                        <div class="row">
                            @foreach ($exams as $items)
                            <div class="col-xl-4 col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="test-border">
                                    <div class="exam_img">
                                        <img src="{{asset('image/uploads/exam/original_thumbnail/'.$items->thumbnail)}}" alt="" class="image-size">
                                    </div>
                                    <div class="mt-2">
                                        <h2 class="px-3 py-2">{{$items->title}}</h2>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text"><span class="exam_time">{{$items->time_limit}}</span> Minutes Long Test</p>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text">
                                            {{substr($items->instruction, 0, 250)}}
                                        </p>
                                    </div>
                                    <div class="pb-4 text-center">
                                        <a href="{{route('frontend.exam.info', $items->id)}}" class="btn test-start-button">Start Test</a> 
                                    </div>
                                </div>
                            </div> 
                            @endforeach
                           
                            {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="test-border">
                                    <div>
                                        <img src="{{asset('frontend/image/1.png')}}" alt="" class="image-size">
                                    </div>
                                    <div class="mt-2">
                                        <h2 class="px-3 py-2">Tense</h2>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text">Study the grammar lessons that are typically included in each level: A1, A2, B1, B1+, B2. There are three or more exercises and an explanation in each lesson. And you will find feedback for every question!
                                        </p>
                                    </div>
                                    <div class="pb-4 text-center">
                                        <button class="test-start-button">Start Test</button> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-4 col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="test-border">
                                    <div>
                                        <img src="{{asset('frontend/image/1.png')}}" alt="" class="image-size">
                                    </div>
                                    <div class="mt-2">
                                        <h2 class="px-3 py-2">Voice Change</h2>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text">Study the grammar lessons that are typically included in each level: A1, A2, B1, B1+, B2. There are three or more exercises and an explanation in each lesson. And you will find feedback for every question!
                                        </p>
                                    </div>
                                    <div class="pb-4 text-center">
                                        <button class="test-start-button">Start Test</button> 
                                    </div>
                                </div>
                            </div>  --}}
                        </div>
                        {{-- <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="test-border">
                                    <div>
                                        <img src="{{asset('frontend/image/1.png')}}" alt="" class="image-size">
                                    </div>
                                    <div class="mt-2">
                                        <h2 class="px-3 py-2">Parts of speech</h2>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text">Study the grammar lessons that are typically included in each level: A1, A2, B1, B1+, B2. There are three or more exercises and an explanation in each lesson. And you will find feedback for every question!
                                        </p>
                                    </div>
                                    <div class="pb-4 text-center">
                                        <button class="test-start-button">Start Test</button> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-4 col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="test-border">
                                    <div>
                                        <img src="{{asset('frontend/image/1.png')}}" alt="" class="image-size">
                                    </div>
                                    <div class="mt-2">
                                        <h2 class="px-3 py-2">Tense</h2>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text">Study the grammar lessons that are typically included in each level: A1, A2, B1, B1+, B2. There are three or more exercises and an explanation in each lesson. And you will find feedback for every question!
                                        </p>
                                    </div>
                                    <div class="pb-4 text-center">
                                        <button class="test-start-button">Start Test</button> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-4 col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="test-border">
                                    <div>
                                        <img src="{{asset('frontend/image/1.png')}}" alt="" class="image-size">
                                    </div>
                                    <div class="mt-2">
                                        <h2 class="px-3 py-2">Voice Change</h2>
                                    </div>
                                    <div>
                                        <p class="px-3 main-text">Study the grammar lessons that are typically included in each level: A1, A2, B1, B1+, B2. There are three or more exercises and an explanation in each lesson. And you will find feedback for every question!
                                        </p>
                                    </div>
                                    <div class="pb-4 text-center">
                                        <button class="test-start-button">Start Test</button> 
                                    </div>
                                </div>
                            </div> 
                        </div> --}}
                    </div>
                    <!-- service section end -->
                </div>
            </div>
            
        </div>
    </section>
    <!-- main section end -->
@endsection