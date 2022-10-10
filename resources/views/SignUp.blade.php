@extends('Layout')

@section('content')
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>회원가입</h4>

            <form method="POST" action="/join">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <p>아이디<span>*</span></p>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="checkout__input">
                                        <input type="text" id="user_id" name="user_id">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="site-btn2">중복확인</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>비밀번호<span>*</span></p>
                                    <input type="password" id="user_pw" name="user_pw">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>비밀번호 확인<span>*</span></p>
                                    <input type="password" id="user_pw_re" name="user_pw_re">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>이름<span>*</span></p>
                            <input type="text" id="user_name" name="user_name">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>전화번호<span>*</span></p>
                                    <input type="text" id="user_phone" name="user_phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" id="user_email" name="user_email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>주소<span>*</span></p>
                            <input type="text" placeholder="Street Address" class="checkout__input__add" id="user_address" name="user_address">
                            <input type="text" placeholder="Apartment, suite, unite ect (optinal)" id="user_address_detail" name="user_address_detail">
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="user_marketing">
                                마케팅 수신동의
                                <input type="checkbox" id="user_marketing" name="user_marketing">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="site-btn">회원가입</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
    </div>
</section>
<!-- Checkout Section End -->
@endsection
